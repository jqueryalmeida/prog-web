<?php
  /**
   * CONTROLADOR DA TELA DE IMAGENS DO SISTEMA.
   */
  class imagesController extends controller
  {

    public function __construct(){
        parent::__construct();
        $users = new usersDB();
        $users->users_check_session();
        global $user_in;
        $user_in = intval($_SESSION['crud_session_log']);
    }

    public function index(){
      global $user_in;
      $data_set = array('erro' => '');
      $img = new imagesDB();
      $data_set['my_images'] = $img->getImages($user_in);

      if(isset($_POST['img_new'])){
        $id = $user_in;
        $images = $_FILES['images'];

        $img = new imagesDB();
        $data_set['return'] = $img->addImage($images, $id);
      }

      if (isset($_POST['img_edit'])) {
        $pic_id = $_POST['id_img'];
        $name = addslashes(htmlspecialchars($_POST['name']));
        $description = addslashes(htmlspecialchars($_POST['description']));
        $img = new imagesDB();
        $data_set['return'] = $img->editImage($pic_id, $name, $description);
      }

      if (isset($_POST['deleteImageDone'])) {
        $pic_id = $_POST['id_img'];
        $img = new imagesDB();
        $data_set['return'] = $img->deleteImage($pic_id);
   }

      $this->loadTemplate('images', $data_set);
    }

  }

?>
