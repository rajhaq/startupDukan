<?php 
include 'config.php';
function password(){
	echo '<div class="alert alert-block alert-error fade in">
                    <button data-dismiss="alert" class="close" type="button">
                      ×
                    </button>
                    <h4 class="alert-heading">
                      Error!
                    </h4>
                    <p>
                     wrong password
                    </p>
                  </div>';
}
function email(){
	echo '<div class="alert alert-block alert-error fade in">
                    <button data-dismiss="alert" class="close" type="button">
                      ×
                    </button>
                    <h4 class="alert-heading">
                      Error!
                    </h4>
                    <p>
                    invaid email
                    </p>
                  </div>';
}
?>