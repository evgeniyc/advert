<?php
$auth=Yii::app()->authManager;
 
$auth->createOperation('create','create a post');
$auth->createOperation('read','read a post');
$auth->createOperation('update','update a post');
$auth->createOperation('delete','delete a post');
 
$bizRule='return Yii::app()->user->id==$params["author"];';
$task=$auth->createTask('updateOwn','update a post by author himself',$bizRule);
$task->addChild('update');
 
$role=$auth->createRole('reader');
$role->addChild('read');
 
$role=$auth->createRole('author');
$role->addChild('reader');
$role->addChild('create');
$role->addChild('updateOwn');
 
$role=$auth->createRole('editor');
$role->addChild('reader');
$role->addChild('update');
 
$role=$auth->createRole('admin');
$role->addChild('editor');
$role->addChild('author');
$role->addChild('delete');