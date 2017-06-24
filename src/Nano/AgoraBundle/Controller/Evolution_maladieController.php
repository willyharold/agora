<?php

namespace Nano\AgoraBundle\Controller;

use Nano\AgoraBundle\Entity\Evolution_maladie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Evolution_maladie controller.
 *
 * @Route("evolution_maladie")
 */
class Evolution_maladieController extends Controller
{
    /**
     * Lists all evolution_maladie entities.
     *
     * @Route("/", name="evolution_maladie_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $evolution_maladies = $em->getRepository('NanoAgoraBundle:Evolution_maladie')->findAll();

        return $this->render('evolution_maladie/index.html.twig', array(
            'evolution_maladies' => $evolution_maladies,
        ));
    }

    /**
     * Creates a new evolution_maladie entity.
     *
     * @Route("/new", name="evolution_maladie_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $evolution_maladie = new Evolution_maladie();
        $form = $this->createForm('Nano\AgoraBundle\Form\Evolution_maladieType', $evolution_maladie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($evolution_maladie);
            $em->flush();

            return $this->redirectToRoute('evolution_maladie_show', array('id' => $evolution_maladie->getId()));
        }

        return $this->render('evolution_maladie/new.html.twig', array(
            'evolution_maladie' => $evolution_maladie,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a evolution_maladie entity.
     *
     * @Route("/{id}", name="evolution_maladie_show")
     * @Method("GET")
     */
    public function showAction(Evolution_maladie $evolution_maladie)
    {
        $deleteForm = $this->createDeleteForm($evolution_maladie);

        return $this->render('evolution_maladie/show.html.twig', array(
            'evolution_maladie' => $evolution_maladie,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing evolution_maladie entity.
     *
     * @Route("/{id}/edit", name="evolution_maladie_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Evolution_maladie $evolution_maladie)
    {
        $deleteForm = $this->createDeleteForm($evolution_maladie);
        $editForm = $this->createForm('Nano\AgoraBundle\Form\Evolution_maladieType', $evolution_maladie);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('evolution_maladie_edit', array('id' => $evolution_maladie->getId()));
        }

        return $this->render('evolution_maladie/edit.html.twig', array(
            'evolution_maladie' => $evolution_maladie,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a evolution_maladie entity.
     *
     * @Route("/{id}", name="evolution_maladie_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Evolution_maladie $evolution_maladie)
    {
        $form = $this->createDeleteForm($evolution_maladie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($evolution_maladie);
            $em->flush();
        }

        return $this->redirectToRoute('evolution_maladie_index');
    }

    /**
     * Creates a form to delete a evolution_maladie entity.
     *
     * @param Evolution_maladie $evolution_maladie The evolution_maladie entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Evolution_maladie $evolution_maladie)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('evolution_maladie_delete', array('id' => $evolution_maladie->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
