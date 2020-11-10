<?php

namespace MulkiAqi192\Hub;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;

class main extends PluginBase implements Listener {

	public function onEnable(){

	}

	public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {

		switch($cmd->getName()){
			case "hub":
			 if($sender instanceof Player){
			 	$sender->teleport($this->getServer()->getDefaultLevel()->getSpawnLocation());
			 	$sender->addTitle("§aTeleported!", "§aYou've been teleported to §6lobby!");
			 	$sender->sendMessage("§aYou've just got teleported to §6lobby!");
			 	return true;
			 }
			 case "lobby":
			 if($sender instanceof Player){
			 	$sender->teleport($this->getServer()->getDefaultLevel()->getSpawnLocation());
			 	$sender->addTitle("§aTeleported!", "§aYou've been teleported to §6lobby!");
			 	$sender->sendMessage("§aYou've just got teleported to §6lobby!");
			 	return true;
			 }
			case "spawn":
			 if($sender instanceof Player){
			 	$sender->teleport($this->getServer()->getDefaultLevel()->getSpawnLocation());
			 	$sender->addTitle("§aTeleported!", "§aYou've been teleported to §6lobby!");
			 	$sender->sendMessage("§aYou've just got teleported to §6lobby!");
			 	return true;
			 }
		}
	return true;
	}


}