  <?php echo $this->Form->create(null,['url' => ['controller' => 'Users', 'action' => 'simpleLogin'], 'class' => 'normal-submit']) ?>

    <fieldset class="mobile-form">
      <?php echo $this->Form->input('mobile_number',array('type' => 'text', 'class' => 'mobile','placeholder' => 'Enter Email','label' => false)); ?>
    </fieldset>       

    <fieldset class="mobile-form">
      <?php echo $this->Form->input('password',array('id' => 'password_input','class' => 'mobile', 'placeholder' => __('Enter Password'),'label' => false)); ?>
    </fieldset>

    <fieldset>
      <?php 
        echo $this->Html->link(
            'Login with Google',
            ['controller' => 'Users', 'action' => 'login', '?' => ['provider' => 'Google']]
        );      
      ?>      
    </fieldset>

    <fieldset>
      <?php 
        echo $this->Html->link(
            'Login with Twitter',
            ['controller' => 'Users', 'action' => 'login', '?' => ['provider' => 'Twitter']]
        );      
      ?>      
    </fieldset>    


    <fieldset>
      <?php 
        echo $this->Html->link(
            'Login with Facebook',
            ['controller' => 'Users', 'action' => 'login', '?' => ['provider' => 'Facebook']]
        );      
      ?>      
    </fieldset>    

    <fieldset>
           <span><button type="submit" class="button">Login</button></span>
    </fieldset>

  <?php echo $this->Form->end(); ?>