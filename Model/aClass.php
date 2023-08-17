<?php
    require_once '../../Nilelib/Controller/auth_controller.php';
    class Books
    {
        private $id;
        private $name;
        private $category;
        private $description;
        private $author_nm;
        private $image;
        //<-------------- SETS Functions -------------------->
        public function setID($i)   {$this->id = $i; }
        public function setName($n) {$this->name = $n;}
        public function setCategory($c) {$this->category = $c;}
        public function setDescription($D)  {$this->description = $D;}
        public function setAuthor_nm($a)    {$this->author_nm = $a;} 
        public function setImage($i)    {$this->image = $i;}
        //<-------------- GETS Functions -------------------->
        public function getAuthor_nm()  {return $this->author_nm;}
        public function getDescription()    {return $this->description;}
        public function getCategory()   {return $this->category;}
        public function getName()   {return $this->name;}
        public function getId() {return $this->id;}
        public function getImage() {return $this->image;}

        public function Fill_1D_Array($rs)
        {
            $this->setID($rs["ID"]);
            $this->setName($rs["name"]);
            $this->setAuthor_nm($rs["author_nm"]);
            $this->setCategory($rs["category"]);
            $this->setDescription($rs["describtion"]);
            $this->setImage($rs["image"]);
        }
        public function Fill_2D_Array($rs)
        {
            $this->setID($rs[0]["ID"]);
            $this->setName($rs[0]["name"]);
            $this->setAuthor_nm($rs[0]["author_nm"]);
            $this->setCategory($rs[0]["category"]);
            $this->setDescription($rs[0]["describtion"]);
            $this->setImage($rs[0]["image"]);
        } 
    }

    class FeedBack
    {
        private $id;
        private $email;
        private $phone_no;
        private $name;
        private $massage;
                //<-------------- SETS Functions -------------------->
        public function setID($i)   {$this->id = $i;}
        public function setEmail($e)    {$this->email = $e;}
        public function setPhone_no($p) {$this->phone_no = $p;}
        public function setName($n) {$this->name = $n;}
        public function setMassage($m)  {$this->massage = $m;}

        //<-------------- GETS Functions -------------------->
        public function getID() {return $this->id;}
        public function getEmail()  {return $this->email;}
        public function getPhone_no()   {return $this->phone_no;}
        public function getName()   {return $this->name;}
        public function getMassage()    {return $this->massage;}
    }

    class admin
    {
        private $email;
        private $password;
        public function setEmail($e)    {$this->email = $e;}
        public function setPass($e)    {$this->password = $e;}

        public function getEmail()    {return $this->email;}
        public function getPassworrd()    {return $this->password;}
    }

?>