<?php

namespace App\Controller;

use App\Entity\Workflow;
use App\Form\WorkflowType;
use App\Repository\WorkflowRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/workflow')]
class WorkflowController extends AbstractController
{
    #[Route('/', name: 'app_workflow_index', methods: ['GET'])]
    public function index(WorkflowRepository $workflowRepository): Response
    {
        return $this->render('workflow/index.html.twig', [
            'workflows' => $workflowRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_workflow_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $workflow = new Workflow();
        $form = $this->createForm(WorkflowType::class, $workflow);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($workflow);
            $entityManager->flush();

            return $this->redirectToRoute('app_workflow_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('workflow/new.html.twig', [
            'workflow' => $workflow,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_workflow_show', methods: ['GET'])]
    public function show(Workflow $workflow): Response
    {
        return $this->render('workflow/show.html.twig', [
            'workflow' => $workflow,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_workflow_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Workflow $workflow, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(WorkflowType::class, $workflow);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_workflow_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('workflow/edit.html.twig', [
            'workflow' => $workflow,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_workflow_delete', methods: ['POST'])]
    public function delete(Request $request, Workflow $workflow, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$workflow->getId(), $request->request->get('_token'))) {
            $entityManager->remove($workflow);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_workflow_index', [], Response::HTTP_SEE_OTHER);
    }
}
