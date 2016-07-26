<?php
  var_dump($_GET);
  var_dump($_POST);?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Semantics</title>
    </head>
    <body>
            <label for="username">Click me to focus the username field.</label>
            <h2>User Login</h2>
        <form method="Post" action="/my_first_form.php">
            <label for="username">Username</label>
            <input id="username" name="username" type="text" placeholder="Username">
            <label for="password">Password</label>
            <input id="password" name="password" type="password" placeholder="Password">
            <button type="submit">Login</button>
    </form>
    <form method="GET" action="https://duckduckgo.com/"/>
        <label for="duckduckgo">duckduckgo</label>
        <input type="search" name="q" id="duckduckgo">
        <input type="submit">
    </form>
    </form>
    <form method="GET" action="https://www.google.com/"/>
        <label for="Google">Google</label>
        <input type="search" name="q" id="Google">
        <input type="submit">
    </form>
        <a href="https://www.reddit.com/search?q=javascript&sort=top">JavascriptReddit</a>
    <form method="GET" action="https://www.reddit.com/search" target="_blank">
        <label for="reddit">Reddit</label>
        <input type="search" name="q" id="reddit">
        <input type="submit">
        <input type="hidden" name="sort" value="top">
    </form>
    <form method="GET" action=/"my_first_form.php" id="checkbox test"></form>
    <h2>Compose an Email</h2>
    <form>
        <label for="to">To</label>
        <input type="text" id="to" name="to" value="" placeholder="Send To">
        <label for="from">From</label>
        <input type="text" id="from" name="from" value="" placeholder="Send From">
        <br>
        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" value="" placeholder="Subject">
        <br>
        <label for="body">Body</label>
        <br>
        <textarea name="email" id="email" placeholder="Write email here." cold="30" rows="10">Write Email Here</textarea>
        <br>
        <button type="submit">Send</button>
        <label><input type="checkbox" id="save draft" name="save draft" value="yes" checked>Would you like to save a copy to your sent folder?</label>
    </form>
    <br>
    <h2>Multiple Choice Test</h2>
    <form>
        <p>What's your favorite city in Texas?</p>
            <label><input type="radio" name="q1" value="Houston">Houston</label>
            <label><input type="radio" name="q1" value="Dallas">Dallas</label>
            <label><input type="radio" name="q1" value="Austin">Austin</label>
        <p>What's your favorite radio station?</p>
            <label><input type="radio" name="q2" value="Magic">Magic</label>
            <label><input type="radio" name="q2" value="Jack">Jack</label>
            <label><input type="radio" name="q2" value="KISS">KISS</label>
        <p>How many cats do you have?</p>
            <label><input type="checkbox" id="cat1" name="cat1" value="yes">1</label>
            <label><input type="checkbox" id="cat2" name="cat1" value="yes">2</label> 
            <label><input type="checkbox" id="cat3" name="cat1" value="yes">3</label> 
            <br>
        <label for="os">What operating systems have you used? </label>
        <select id="os" name="os[]" multiple>
            <option value="linus">Linux</option>
            <option value="osx">OS X</option>
            <option value="windows">Windows</option>
        </select>
        <br>
        <button type="submit">Submit</button>   
    </form>
    <form>
        <h2>Select Testing</h2>
        <label for="lice">Do you have lice?</label>
        <select id="lice" name="lice">
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
    </form>
    </body>
</html>