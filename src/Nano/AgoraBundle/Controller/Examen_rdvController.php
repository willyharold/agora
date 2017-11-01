<?php

namespace Nano\AgoraBundle\Controller;

use Nano\AgoraBundle\Entity\Examen_rdv;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Examen_rdv controller.
 *
 */
class Examen_rdvController extends Controller
{
    /**
     * Lists all examen_rdv entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $examen_rdvs = $em->getRepository('NanoAgoraBundle:Examen_rdv')->findAll();

        return $this->render('examen_rdv/index.html.twig', array(
            'examen_rdvs' => $examen_rdvs,
        ));
    }

    /**
     * Creates a new examen_rdv entity.
     *
     */
    public function newAction(Request $request)
    {
        $examen_rdv = new Examen_rdv();
        $form = $this->createForm('Nano\AgoraBundle\Form\Examen_rdvType', $examen_rdv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($examen_rdv);
            $em->flush();

            return $this->redirectToRoute('examen_rdv_show', array('id' => $examen_rdv->getId()));
        }

        return $this->render('examen_rdv/new.html.twig', array(
            'examen_rdv' => $examen_rdv,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a examen_rdv entity.
     *
     */
    public function showAction(Examen_rdv $examen_rdv)
    {
        $deleteForm = $this->createDeleteForm($examen_rdv);

        return $this->render('examen_rdv/show.html.twig', array(
            'examen_rdv' => $examen_rdv,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing examen_rdv entity.
     *
     */
    public function editAction(Request $request, Examen_rdv $examen_rdv)
    {
        $deleteForm = $this->createDeleteForm($examen_rdv);
        $editForm = $this->createForm('Nano\AgoraBundle\Form\Examen_rdvType', $examen_rdv);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('examen_rdv_edit', array('id' => $examen_rdv->getId()));
        }

        return $this->render('examen_rdv/edit.html.twig', array(
            'examen_rdv' => $examen_rdv,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a examen_rdv entity.
     *
     */
    public function deleteAction(Request $request, Examen_rdv $examen_rdv)
    {
        $form = $this->createDeleteForm($examen_rdv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($examen_rdv);
            $em->flush();
        }

        return $this->redirectToRoute('examen_rdv_index');
    }

    /**
     * Creates a form to delete a examen_rdv entity.
     *
     * @param Examen_rdv $examen_rdv The examen_rdv entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Examen_rdv $examen_rdv)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('examen_rdv_delete', array('id' => $examen_rdv->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
