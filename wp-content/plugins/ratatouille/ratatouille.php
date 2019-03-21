<?php
// On use ici le namespace, l'avantage de cette écriture là c'est qu'on créer un 'ALIAS' avec la commande 'as' ce qui fait qu'a la ligne 24 on peut simplement écrire RecipePostType::class, pour l'exemple j'ai préciser que l'alias était RecipePostType mais a vrai dir c'est nécéssaire qeu si on modifie le nom de la class si on veut garder un Alias qui porte le meme nom que la class il ne faut pas le préciser si on écrivait :
// use App\Features\PostTypes\RecipePostType cela reviendrait au même un créer automatiqement un alias du même nom si on ne le précise pas.
use App\Features\PostTypes\RecipePostType as RecipePostType;

/**
 * Plugin Name:     Ratatouille
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     ratatouille
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Ratatouille
 */

// Your code starts here.

require_once('App/Features/PostTypes/RecipePostType.php');


add_action('init',[RecipePostType::class, 'register']);

