<?php


namespace smn\router;


use smn\router2\ControllerLogic;

class Router implements RouterInterface
{
    protected RequestInterface $request;

    protected ControllerLogicInterface $controllerLogic;

    public function __construct(ControllerLogicInterface $controllerLogic) {
        $this->request = new Request();
        $this->setControllerLogic($controllerLogic);
    }

    public function getRequest(): RequestInterface
    {
        return $this->request;
    }

    public function getResponse(): ResponseInterface
    {
        // TODO: Implement getResponse() method.
    }

    public function getController()
    {
        // TODO: Implement getController() method.
    }

    public function setControllerLogic(ControllerLogicInterface $controllerLogic)
    {
        $this->controllerLogic = $controllerLogic;
    }
}