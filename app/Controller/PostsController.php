<?php
	class PostsController extends AppController {
		public $helpers=array('html','form','session');
		public $components=array('session');
		
		public function index() {
			$this->set('posts', $this->Post->find('all'));
		}
		
		public function view($id=null) {
			$this->Post->id=$id;
			$this->set('post', $this->Post->read());
		}
		
		public function tambah() {
			if ($this->request->is('post')){
				if ($this->Post->save($this->request->data)) {
					$this->Session->setFlash('Postingan kamu sudah disimpan');
					$this->redirect(array('action'=>'index'));
				} else {
					$this->Session->setFlash('Maaf tidak bisa menambahkan');
				}
			}
		}
		
		public function edit($id=null) {
			$this->Post->id=$id;
			if ($this->request->is('get')) {
				$this->request->data=$this->Post->read();
			} else {
				if ($this->Post->save($this->request->data)) {
					$this->Session->setFlash('Postingan kamu telah di-update');
					$this->redirect(array('action'=>'index'));
				} else {
					$this->Session->setFlash('Tidak bisa meng-update postingan');
				}
			}
		}
		
		public function hapus($id) {
			if ($this->request->is('get')) {
				throw new MethodNotAlowwedException();
			}
			if ($this->Post->delete($id)){
				$this->Session->setFlash('Post dengan ID "'.$id.'" telah dihapus');
				$this->redirect(array('action'=>'index'));
			}
		}
	}