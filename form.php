<?php

/* 
 * PHP Form validation.
 */

$error = [];
$error['email'] = false;
$form_submit_successful = false;
$error_message = 'Please fill required field';

$field_default = 'Not available';

//form submitted
if ( isset($_POST['new-user-form']) ) {
    
    /*
    print '<pre>';
    print_r($_POST);
    print '</pre>';
    */
    
    //check for mandatory fields
    if ( isset($_POST['username']) && !empty($_POST['username']) ) {
        
        $username = trim($_POST['username']);
        $error['username'] = 0;
    }
    else $error['username'] = 1;
    
    
    if ( isset($_POST['candidate_name']) && !empty($_POST['candidate_name']) ) {
        
        $candidate_name= trim($_POST['candidate_name']);
        $error['candidate_name'] = 0;
    }
    else $error['candidate_name'] = 1;
    
    
    if ( isset($_POST['gender']) ) {
        $gender= trim($_POST['gender']);
        $error['gender'] = 0;
    }
    else $error['gender'] = 1;

    
    if ( isset($_POST['profession']) ) {
        
        $profession = implode(', ', $_POST['profession']);
        $error['profession'] = 0;
        
    }
    else $error['profession'] = 1;
     
    
    if( isset($_POST['qualification']) && '0' != $_POST['qualification'] ) {
        $qualification = trim($_POST['qualification']);
        $error['qualification'] = 0;
    }
    else $error['qualification'] = 1;
    
     
     
    //if( isset($_POST['pass']) ) $pass= trim($_POST['pass']);
    
    
    $about_me = ( isset($_POST['about_me']) && !empty($_POST['about_me']) )
                ? trim($_POST['about_me']) 
                : $field_default;
     
    /*print '<pre>';
    print_r($error);
    print '</pre>';*/
    
    
    //email validation
    if ( isset($_POST['email']) && !empty($_POST['email']) ) {
        
        $email = $_POST['email'];
        if ( !filter_var($email, FILTER_VALIDATE_EMAIL) )
               $error['email']['message'] = 'Invalid email!';
        
        
    }
    else $error['email']['message'] = 'Please enter email';
    
    //check error
    foreach ($error as $field=>$error_status) {
        
        //error handling for email
        if ($field == 'email' && $error_status != false) {
            $form_submit_successful = false;
            break;
        }
        
        if ($error_status) {
            $form_submit_successful = false;
            break;
        }
        else 
            $form_submit_successful = true;
        
    }
    
    
    
}  //end form submit

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <title>PHP Form validation</title>
    <meta charset="utf-8" />
    
    <style type="text/css">
	
	
        #head {
            color: #0088FF;
            text-decoration:underline;
            font-family:times new roman;
        }

        p {
            font-size: 18px;
            font-family: times new roman;
            margin-left: 10px;
        }

        fieldset {

            margin-bottom: 1em;

        }

        input[type="text"], input[type="password"], textarea {
            width: 250px;
            height: 25px;
            border: 1px solid #B1D2FF;
            padding-left: 5px;
        }

        input[type="text"]:focus, input[type="password"]:focus, textarea:focus{
            background: #EFF6FF;
        }

        #about_me {
            width: 255px;
            height: 91px;
            resize: none;
            padding:5px 4px 5px 4px;
        }
        
        span.reqd {
            color: red;
            font-weight: bold;
        }
        
        #result {
            padding: 1em;
            border: 1px solid green;
            background: #dedede;
        }

    </style>
        
</head>

<body>

    <h2 id="head">PHP Form validation</h2>
    
    
    <?php if (!$form_submit_successful) : ?>
    <form method="post" action="">
		
        <fieldset>

            <legend>Login Info</legend>

            <p>
                <label for="username">User name&nbsp;<span class="reqd">* <?php
                    if ( isset($error['username']) && $error['username'] )
                        print $error_message;
                ?></span></label><br />
                <input type="text" id="username" name="username" value="<?php
                    if (isset($_POST['username']) && !empty($_POST['username']))
                        print $_POST['username'];
                ?>" placeholder="Your Name"/>
            </p>

            <p>
                <label for="email">Email address:&nbsp;<span class="reqd">* <?php
                    if (is_array($error['email']) )
                        print $error['email']['message'];
                ?></span></label><br />
                <input type="text" id="email" name="email" value="<?php
                    if (isset($_POST['email']) && !empty($_POST['email']))
                        print $_POST['email']; 
                ?>" placeholder="someone@example.com" />
            </p>

        </fieldset>

        <fieldset>
            <legend>User details :Basic</legend>

            <p>
                <label for="candidate_name">Name&nbsp;<span class="reqd">*<?php
                    if ( isset($error['candidate_name']) && $error['candidate_name'])
                        print $error_message;
                ?></span> </label><br />
                <input type="text" id="candidate_name" name="candidate_name" value="<?php
                    if (isset($_POST['candidate_name']) && !empty($_POST['candidate_name']))
                        print $_POST['candidate_name'];
                ?>" />
            </p>

            <p>
                <label for="about_me">About me: </label><br />
                <textarea id="about_me" name="about_me"><?php
                    if (isset($_POST['about_me']) && !empty($_POST['about_me']))
                        print $_POST['about_me'];
                ?></textarea>
            </p>

        </fieldset>

        <fieldset>
            <legend>User details: Additional</legend>

            <p>
               <label>Gender&nbsp;<span class="reqd">*<?php
                    if ( isset($error['gender']) && $error['gender'])
                        print $error_message;
                ?></span></label><br />
                <input type="radio" name="gender" value="Male" <?php
                    if (isset($_POST['gender']) && 'Male' == $_POST['gender'])
                        print ' checked="checked"'
                ?>/> Male
                <input type="radio" name="gender" value="Female" <?php
                    if (isset($_POST['gender']) && 'Female' == $_POST['gender'])
                        print ' checked="checked"';
                ?>/> Female
            </p>

            <p>
                 <label>Profession&nbsp;<span class="reqd">*<?php
                    if (isset($error['profession']) && $error['profession'])
                        print $error_message;
                ?></span> </label><br />
                 <input type="checkbox" name="profession[]" value="Web Designer" <?php 
                    if ( isset($_POST['profession']) && in_array('Web Designer', $_POST['profession']) )
                            print ' checked="checked"';
                 ?>/>&nbsp;Web designer
                 <input type="checkbox" name="profession[]" value="PHP/MySQL" <?php 
                    if ( isset($_POST['profession']) && in_array('PHP/MySQL', $_POST['profession']) )
                            print ' checked="checked"';
                 ?>/>&nbsp;PHP/MySQL developer
                 <input type="checkbox" name="profession[]"  value="jQuery" <?php 
                    if ( isset($_POST['profession']) && in_array('jQuery', $_POST['profession']) )
                            print ' checked="checked"';
                 ?> />&nbsp;jQuery developer
            </p>


            <p>
                 <label for="image">Picture</label><br />
                 <input type="file" id="image"  />

            </p>

            <p>
                <label for="qualification">Qualification&nbsp;<span class="reqd">*<?php
                    if ( isset($error['qualification']) && $error['qualification'])
                        print $error_message;
                ?></span></label><br />
                <select id="qualification" name="qualification">
                     <option value="0">Select</option>
                     <option value="IT Graduate"<?php 
                            if ( isset($_POST['qualification']) && $_POST['qualification']== 'IT Graduate' )
                                print ' selected="selected"';
                         ?> >IT Graduate</option>
                     <option value="MCA" <?php 
                            if ( isset($_POST['qualification']) && $_POST['qualification']== 'MCA' )
                                print ' selected="selected"';
                         ?>>MCA</option>
                     <option value="B.E/B.Tech" <?php 
                            if ( isset($_POST['qualification']) && $_POST['qualification']== 'B.E/B.Tech' )
                                print ' selected="selected"';
                         ?>>B.E/B.Tech</option>
                 </select>
            </p>


           <input type="hidden" name="new-user-form" />
           <input type="submit" value="Signup" />

        </fieldset>

    </form>
    
    <?php else : ?>
    <div id="result">
        
        <h3>Form successfully submitted</h3>
        
        <p>User: <?= $username ?></p>
        <p>Candidate Name: <?= $candidate_name ?></p>
        <p>About: <?= $about_me ?></p>
        <p>Gender: <?= $gender ?></p>
        <p>Profession: <?= $profession ?></p>
        <p>Qualification: <?= $qualification ?></p>
        
    </div>
    <?php endif; ?>
    
</body>
</html>
    
