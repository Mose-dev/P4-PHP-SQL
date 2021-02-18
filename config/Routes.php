<?php

class Routes 
{
     public function __construct()
     {
          $this->billet = new Billet;
          $this->page = new Page;
          $this->user = new User;
          $this->admin = new Admin;
          $this->comment = new Comment;
          $this->messages = new Messages;
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
                         $this->admin->connexion();
                    break;
                    case 'dashboard' :
                         $this->admin->dashboard();
                    break;
                    case 'deconnexion' :
                         $this->admin->deconnexion();
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
                         $this->billet->commentStory();
                    break; 
                    case 'addComment' :
                         $this->comment->addComment();
                    break;  
                    case 'reportComment' :
                         $this->comment->reportComment();
                    break; 
                    case 'keepReport' :
                         $this->comment->keepReport();
                    break; 
                    case 'report' :
                         $this->comment->getReport();
                    break; 
                    case 'deleteReport' :
                         $this->comment->deleteReport();
                    break;
                    case 'deleteBillet' :
                         (new BilletAdmin)->deleteBillet();
                    break; 
                    case 'getUsers' :
                         $this->user->getUsers();
                    break; 
                    case 'deleteUser' :
                         $this->user->deleteUser();
                    break; 
                    case 'messages' :
                         $this->messages->postMessages();
                    break;
                    case 'getmessages' :
                         $this->messages->getMessages();
                    break;  
                    case 'deleteMessages' :
                         $this->messages->deleteMessages();
                    break;  
               }
          }
          catch(Exception $e) 
          {
               echo $e->getMessage();
          } 
     }
}