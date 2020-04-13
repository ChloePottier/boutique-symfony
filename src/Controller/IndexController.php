<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Product;
use App\Form\InscriptionType;
use App\Form\InfosClientType;
use App\Form\UpdatePasswordType;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class IndexController extends AbstractController
{
      /**
     * @Route("/", name="index")
     */
    public function listProduct(ProductRepository $productRepository)
    {

        $products = $productRepository->findAll();

        return $this->render('index/index.html.twig', [
            "products" => $products
        ]);
    }

     /**
     * @Route("/inscription", name="inscription")
     */
    public function inscription(EntityManagerInterface $manager, HttpFoundationRequest $request, UserPasswordEncoderInterface $encoder)
    {

        $user = new User();

        $form = $this->createForm(InscriptionType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $passwordCrypte = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($passwordCrypte);
            $user->setRoles("ROLE_USER");
            $manager->persist($user);
            $manager->flush();
            return $this->redirectToRoute("index");
        }

        return $this->render('index/login/inscription.html.twig', [
            "form" => $form->createView()
        ]);
    }

     /**
     * @Route("/login ", name="login")
     */
    public function login(AuthenticationUtils $util) {

        return $this->render('index/login/login.html.twig', [
            "lastUserName" => $util->getLastUsername(),
            "error" => $util->getLastAuthenticationError()
        ]);
 
     }

     /**
     * @Route("/logout ", name="logout")
     */
    public function logout() {

     }
    /**
     * @Route("/index/details/{id}", name="details_product")
     */
    public function detailsProduct(Product $product)
    {
        return $this->render('index/details/detailsProduct.html.twig', [
            "product" => $product
            ]);
    }
 /**
     * @Route("/panier/add/{id}", name="add_panier")
     */
    public function addPanier($id, SessionInterface $sessionInterface)
    {
        $panier = $sessionInterface->get('panier', []);

        if (!empty($panier[$id])) {
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
        }

        $sessionInterface->set('panier', $panier);
        return $this->redirectToRoute('panier');
        // dd($sessionInterface->get('panier'));
    }

    /**
     * @Route("/panier/", name="panier")
     */
    public function panier(SessionInterface $sessionInterface, ProductRepository $productRepository)
    {
        $panier = $sessionInterface->get('panier', []);

        $panierData = [];

        foreach ($panier as $id => $quantity) {

            $panierData[] = [ 
                'product' => $productRepository->find($id),
                'quantity' => $quantity
            ];
        }
        $total = 0;
        foreach($panierData as $item){
            $totalItem = $item['product']->getPrix() * $item['quantity'];
            //rajouter le tout a $total
            $total += $totalItem;
        }
        // dd($panierData);

        return $this->render('panier/panier.html.twig', [
            'items' => $panierData,
            'total' => $total
        ]);
    }
        /**
     * @Route("/panier/remove/{id}", name="panier_remove")
     */
    public function remove($id, SessionInterface $sessionInterface) 
    {
        $panier = $sessionInterface->get('panier', []);

        if(!empty($panier[$id])) {
            unset($panier[$id]);
        }

        $sessionInterface->set('panier', $panier);

        return $this->redirectToRoute('panier');
    }
     // methods Mon Compte

    /**
     * @Route("/mon_compte", name="compte")
     */
    public function monCompte()
    {
        $user = $this->getUser();


        return $this->render('index/client/compteClient.html.twig', [
            "user" => $user
        ]);
    }

    
    /**
     * @Route("/mon_compte/infos", name="update_infos")
     */
    public function updateInfos(EntityManagerInterface $manager, HttpFoundationRequest $request)
    {
        $user = $this->getUser();

        $form = $this->createForm(InfosClientType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $manager->persist($user);
            $manager->flush();
            return $this->redirectToRoute("compte");
        }


        return $this->render('index/client/updateInfosClient.html.twig', [
            "user" => $user,
            "form" => $form->createView()
        ]);
    }
    /**
     * @Route("/mon_compte/password", name="update_password")
     */
    public function updatePassword(EntityManagerInterface $manager, HttpFoundationRequest $request, UserPasswordEncoderInterface $encoder)
    {
        $user = $this->getUser();

        $form = $this->createForm(UpdatePasswordType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $passwordCrypte = $encoder->encodePassword($user, $this->getUser()->getPassword());
            $user->setPassword($passwordCrypte);
            $manager->persist($user);
            $manager->flush();
            return $this->redirectToRoute("compte");
        }


        return $this->render('index/client/updatePassword.html.twig', [
            "user" => $user,
            "form" => $form->createView()
        ]);
    }

}