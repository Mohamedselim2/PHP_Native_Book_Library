<?php
    //<---------------------Includ Z files------------------------- -->
    require_once '../../Nilelib/Model/aClass.php';
    require_once '../../Nilelib/Controller/DBcontroller.php';

    class auth_controller{
        private $db;
        // Open Connection -> Run Query -> Close Connection 
        //<!-- The Main Task of This Functio Is Create And Add Book In Database -->      
        public function add_book(Books $bk)
        {

            $this->db=new DBcontroller;
            if($this->db->openConnection())
            {
                $nm= $bk->getName();
                $cat=$bk->getCategory();
                $dsc=$bk->getDescription();
                $ath_nm=$bk->getAuthor_nm();
                $img=$bk->getImage();
                $qur = "insert into books (name, category, describtion, author_nm, image) 
                values ('$nm', '$cat', '$dsc', '$ath_nm', '$img');";
                $this -> db -> insert($qur);

                $this ->db->closeConnection();
            } 
        }
        
        public function load_book(array &$bks,$cat)
        {
            $this->db=new DBcontroller();
            if($this->db->openConnection())
            {
                $qur="";
                if($cat=="All"){$qur="select * from books;";}
                else {$qur="select * from books where category='$cat';";}
                $rs=$this->db->select($qur);
                for($i=0;$i<count($rs);$i++)
                {
                    $bks[$i]=new Books();
                    $bks[$i]->Fill_1D_Array($rs[$i]);
                }
                $this->db->closeConnection();
            }
        }
        
        public function find_book($nm,$cat,$aut_nm)
        {
            $this->db=new DBcontroller;
            if($this->db->openConnection())
            {
                $qur="SELECT * FROM books WHERE name='$nm' AND category='$cat' AND author_nm='$aut_nm';";
                $rs = $this -> db -> select($qur);       
            }
            $this->db->closeConnection();
            if(!empty($rs)){return true;}
            else {return false;}
        }
        // public function delete_book($nm,$cat,$at_nm)
        // {
        //     $this->db=new DBcontroller();
        //     if($this->db->openConnection())
        //     {
        //         $qur="delete from books WHERE name='$nm' and category='$cat' and author_nm='$at_nm';";
        //         $rs = $this -> db -> delete($qur);       
        //     }
        //     $this->db->closeConnection();
        // }

        public function load_spc_book(Books &$bk)
        {
            $this -> db = new DBcontroller();

            if( $this -> db -> openConnection() ){
                $id = $bk -> getID();
                $qur = "select * from books where ID = '$id';";
                
                $rs = $this -> db -> select($qur);
                $bk -> Fill_2D_Array($rs);

                $this -> db -> closeConnection();
            }
        }

        public function update_book($bk){
            $this -> db = new DBcontroller();
            if( $this -> db -> openConnection() ){
                $nm = $bk->getName();               $cat = $bk->getCategory();
                $dsc = $bk->getDescription();       $ath_nm = $bk->getAuthor_nm();
                $img = $bk->getImage();             $id = $bk->getID();
                
                $qur = "update books set 
                name = '$nm', category='$cat', describtion='$dsc', author_nm='$ath_nm', image='$img' where ID='$id';";
                $this -> db -> update($qur);

                $this -> db -> closeConnection();
            }
        }
        public function delete_book($id){
            $this -> db = new DBcontroller();
            if( $this -> db -> openConnection() ){
                $qur = "delete from books where ID = '$id';";
                $this -> db -> delete($qur);

                $this -> db -> closeConnection();
            }
        }


        public function find_email($email,$password)
        {
            $this->db=new DBcontroller;
            if($this->db->openConnection())
            {
                $qur="SELECT * FROM admin WHERE email='$email' AND password='$password';";
                $rs = $this -> db -> select($qur);       
            }
            $this->db->closeConnection();
            if(!empty($rs)){return true;}
            else {return false;}
        }

        // public function add_admin(admin $bk)
        // {

        //     $this->db=new DBcontroller;
        //     if($this->db->openConnection())
        //     {
        //         $e= $bk->getEmail();
        //         $p=$bk->getPassworrd();
        //         $qur = "insert into admin (email, password) 
        //         values ('$e', '$p');";
        //         $this -> db -> insert($qur);

        //         $this ->db->closeConnection();
        //     } 
        // }


        public function add_message(FeedBack $fd)
        {
            $this->db=new DBcontroller;
            if($this->db->openConnection())
            {
                $Name= $fd->getName();
                $Email=$fd->getEmail();
                $Phone=$fd->getPhone_no();
                $Message=$fd->getMassage();

                $qur = "insert into feedback (name,email,phone,message) 
                values ('$Name', '$Email', '$Phone', '$Message');";
                $this -> db -> insert($qur);

                


            }   
        }

    }
    // $auth=new auth_controller();
    // $auth->delete_book('mohamed','history','selim');
    // delete_book();
    /*<---------------------Test_add_book---------------------------->
    $bk =new Books();
    $bk->name=("Clean Code");                 
    $bk->category=("Programming");
    $bk->author_nm=("Robert Marten");        
    $bk->image=("../admin_view/assets/images/books/clean_code.jfif");
    $bk->description=("This is a graeat book");
    $ts = new auth_controller();
    $ts->add_book($bk);
    */
    // $bk =new admin();
    // $bk->setEmail("mohamedamrs410@gmail.com");                 
    // $bk->setPass("0000");
    // $ts = new auth_controller();
    // $ts->add_admin($bk);

    // $fb =new FeedBack();
    // $fb->setEmail("mohamedamrs410@gmail.com");                 
    // $fb->setName("sdfd");
    // $fb->setMassage("dsfd");
    // $fb->setPhone_no("0000");
    // $ts = new auth_controller();
    // $ts->add_message($fb);
    // <-------------------------------------------------------------->*/
?>