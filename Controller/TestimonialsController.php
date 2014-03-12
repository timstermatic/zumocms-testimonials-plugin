<?php
class TestimonialsController extends TestimonialsAppController {

/**
 * cms index
 */
    public function cms_index()
    {
        $this->set('testimonials', $this->paginate());
    }

/**
 * cms create
 */
    public function cms_create()
    {
        if(!empty($this->request->data)) {
            if($this->Testimonial->save($this->request->data)) {
                $this->Session->setFlash('Testimonial saved', 'flash_success');
                $this->redirect(array('action'=>'index'));
            }
        }
    }

/**
 * cms edit
 */
    public function cms_edit($id=null)
    {
        if(!empty($this->request->data)) {
            $this->Testimonial->id = $id;
            if($this->Testimonial->save($this->request->data)) {
                $this->Session->setFlash('Testimonial saved', 'flash_success');
                $this->redirect(array('action'=>'index'));
            }
        }
        $this->request->data = $this->Testimonial->read(null, $id);
    }

/**
 * cms delete
 */
    public function cms_delete($id=null)
    {
        $this->Testimonial->delete($id);
        $this->Session->setFlash('Testimonial deleted', 'flash_success');
        $this->redirect(array('action'=>'index'));
    }


}
