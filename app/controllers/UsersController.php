<?php
declare(strict_types=1);

namespace App\controllers;

use Illuminate\Support\Facades\Crypt;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use League\Route\Http\Exception;
use Twig\Environment;
use Models\Users;

class UsersController
{
    /**
     * @var Environment
     */
    private $twig;

    /**
     * UsersController constructor.
     */
    public function __construct()
    {
        $this->twig = require(__DIR__ . '/../../renderer.php');
    }

    /**
     * @return \Exception|Exception|string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function create()
    {
        try{
            return $this->twig->render('Hello.php');
        }catch(Exception $exception){
            return $exception;
        }
    }

    /**
     * @param ServerRequestInterface $request
     * @return ServerRequestInterface
     */
    public function store(ServerRequestInterface $request)
    {
        try{
//            $post = json_decode($request->getBody(), true);
//            $teste = Crypt::encrypt($post['email']);
//            $user = Users::create(['username'=>$username,'email'=>$email,'password'=>$password]);
            return $request;
        }catch(Exception $exception){
            return $exception;
        }
    }
}
