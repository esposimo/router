<?php
namespace smn\router;

interface RouterInterface
{

    public function getRequest() : RequestInterface;

    public function getResponse() : ResponseInterface;

    public function getController();

    public function setControllerLogic(ControllerLogicInterface $controllerLogic);

}