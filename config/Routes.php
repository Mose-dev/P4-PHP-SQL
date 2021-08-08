<?php

class Routes 
{
     public function __construct()
     {
          $this->billet = new Billet;
          $this->page = new Page;
          $this->user = new User;
          $this->comment = new Comment;
          $this->messages = new Messages;
          $this->connexion = new Connexion;

          $this->run();
     }
     public function run()
     {
          try 
          {
               switch($_GET['action'])
               {
                    case 'home':
                         $this->page->home();
                    break;
                    case 'contact':
                         $this->page->contact();
                    break;
                    case 'biographie':
                         $this->page->biographie();
                    break;
                    case 'billetSimple':
                         $this->billet->billetSimple();
                    break;
                    case 'inscription' :
                         $this->user->inscription();
                    break; 
                    case 'connexion' :
                         $this->connexion->login();
                    break;
                    case 'dashboard' :
                         (new Admin)->dashboard();
                    break;
                    case 'deconnexion' :
                         $this->connexion->deconnexion();
                    break; 
                    case 'addBillet' :
                         (new BilletAdmin)->addBillet();
                    break; 
                    case 'correctBillet' :
                         (new BilletAdmin)->displayBillet();
                    break; 
                    case 'correct' :
                         (new BilletAdmin)->correctBillet();
                    break; 
                    case 'commentText' :
                         $this->comment->commentStory();
                    break; 
                    case 'addComment' :
                         $this->comment->addComment();
                    break;  
                    case 'reportComment' :
                         $this->comment->reportComment();
                    break; 
                    case 'keepReport' :
                         (new Admin)->keepReport();
                    break; 
                    case 'report' :
                         (new Admin)->getReport();
                    break; 
                    case 'deleteReport' :
                         (new Admin)->deleteReport();
                    break;
                    case 'deleteBillet' :
                         (new BilletAdmin)->deleteBillet();
                    break; 
                    case 'getUsers' :
                         (new Admin)->getUsers();
                    break; 
                    case 'deleteUser' :
                         (new Admin)->deleteUser();
                    break; 
                    case 'messages' :
                         $this->messages->postMessages();
                    break;
                    case 'getmessages' :
                         (new Admin) ->getMessages();
                    break;  
                    case 'deleteMessages' :
                         (new Admin)->deleteMessages();
                    break;  
               }
          }
          catch(Exception $e) 
          {
               echo $e->getMessage();
          } 
     }
}