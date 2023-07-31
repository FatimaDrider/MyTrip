<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Repository\CommentaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/api',name:'api_commentaire', methods:['Get]'])]
class CommentaireController extends AbstractController
{
    #[Route('/listCommetaire', name: 'add_commentaire', methods: ['GET'])]
    public function index(CommentaireRepository $commentaireRepository, SerializerInterface $serializer): JsonResponse
    {
        $commentairesList = $commentaireRepository->findAll();
        $json = $serializer->serialize($commentairesList, 'json', ['groups' => 'getCommentaires']);

        return new JsonResponse($json, Response::HTTP_OK, [], true);

    }

    #[Route('/comment', name: 'create_ommentaire', methods: ['GET', 'POST'])]
    public function new(Request $request, CommentaireRepository $commantaireRepository, SerializerInterface $serializer,EntityManagerInterface $entityManager): JsonResponse
    {
        $commentaire = $serializer->deserialize($request->getContent(), Commentaire::class, 'json');
        $entityManager->persist($commentaire);
        $entityManager->flush();

        $commentaireJson = $serializer->serialize($commentaire, 'json', ['groups' => 'getCommentaires']);
        return new JsonResponse($commentaireJson, Response::HTTP_OK, [], true);

    }

    #[Route('/{id}', name: 'app_commentaire_show', methods: ['GET'])]
    public function show(Commentaire $commentaire): Response
    {
        return $this->render('commentaire/show.html.twig', [
            'commentaire' => $commentaire,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_commentaire_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Commentaire $commentaire, CommentaireRepository $commantaireRepository): Response
    {
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commantaireRepository->save($commentaire, true);

            return $this->redirectToRoute('app_commentaire_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('commentaire/edit.html.twig', [
            'commentaire' => $commentaire,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_commentaire_delete', methods: ['POST'])]
    public function delete(Request $request, Commentaire $commentaire, CommentaireRepository $commantaireRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commentaire->getId(), $request->request->get('_token'))) {
            $commantaireRepository->remove($commentaire, true);
        }

        return $this->redirectToRoute('app_commentaire_index', [], Response::HTTP_SEE_OTHER);
    }
}
