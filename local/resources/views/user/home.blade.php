<!DOCTYPE html>  
<html>      
    <head>      
        <title>Sample Page</title>    
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">   
        <meta name="csrf-token" content="{{ csrf_token() }}" />    
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script type='text/javascript' src={{ asset('js/user/home.js') }}></script>
    </head>   
    <script type="text/javascript">
      var index = "{{ URL::to('/') }}";
    </script>
    <body>              
        <div data-role="page" id="home">      
            <div data-role="header">         
                <h1>
                    My Contact
                </h1>     
                <a  href="#left-menu" data-icon="bars" data-iconpos="notext">Button</a>
                <a href="#add-form" data-icon="plus" data-iconpos="notext">Add</a>
            </div><!-- /header -->      
            
            <input type="search" placeholder="Search" id="searchbar" />
            <div data-role="content" class="ui-content">                
                <ul data-role="listview" id="list" data-autodividers="true"></ul>
            </div><!-- /content -->      
            
            <div data-role="footer" data-position="fixed" data-tap-toggle="false">
                 <h1>Footer</h1>
            </div>


             <div id="left-menu" data-role="panel" data-position="left" data-theme="b" data-position-fixed="false" data-display="overlay">
                <span>Menu</span>
                <a class="ui-btn ui-icon-home ui-btn-icon-left ui-btn-active" data-theme="b" data-rel="close" gid="0">Home</a>
                <a href="#myprofile" class="ui-btn ui-icon-user ui-btn-icon-left" data-theme="b" data-rel="close" gid="0">My Profile</a>
                <a href="#invites" class="ui-btn ui-icon-plus ui-btn-icon-left" data-theme="b" data-rel="close" gid="0">Invites</a>
                <a class="ui-btn ui-icon-gear ui-btn-icon-left" data-theme="b" data-rel="close" >Settings</a>
                <a class="ui-btn ui-icon-alert ui-btn-icon-left" data-theme="b" data-rel="close" >Reports a Problem</a>
                <a class="ui-btn ui-icon-info ui-btn-icon-left" data-theme="b" data-rel="close" >Help</a>
             </div>

              <div data-role="panel" data-position="right" data-position-fixed="false" data-display="overlay" id="add-form" data-theme="b">
                  <form id="createcontactoffline" class="ui-body ui-body-a ui-corner-all" data-ajax="false" >
                    <h2>Create new contact offline</h2>
                    <label for="name">Full Name</label>
                    <input type="text" name="fullname" id="createfullname" value="" data-clear-btn="true" data-mini="true">

                    <label for="email">Email</label>
                    <input type="email" name="email" id="createemail" value="" data-clear-btn="true" data-mini="true">

                    <label for="name">Phone</label>
                    <input type="text" name="phone" id="createphone" value="" data-clear-btn="true" data-mini="true">

                    <label for="name">Pin BB</label>
                    <input type="text" name="pinbb" id="createpinbb" value="" data-clear-btn="true" data-mini="true">

                    <label for="name">Facebook</label>
                    <input type="text" name="facebook" id="createfacebook" value="" data-clear-btn="true" data-mini="true">

                    <label for="name">Twitter</label>
                    <input type="text" name="twitter" id="createtwitter" value="" data-clear-btn="true" data-mini="true">

                    <label for="name">Instagram</label>
                    <input type="text" name="instagram" id="createinstagram" value="" data-clear-btn="true" data-mini="true">

                    <div class="ui-grid-a">
                        <div class="ui-block-a"><a href="#" data-rel="close" data-role="button" data-theme="c" data-mini="true">Cancel</a></div>
                        <div class="ui-block-b"><input type="button" data-theme="b" name="submit"  id="submit" value="Submit" data-theme="b" data-mini="true"></div>
                    </div>
                </form>
              <!-- panel content goes here -->
            </div><!-- /panel -->
        </div><!-- /page -->      
        
        <div data-role="page" id="page2">         
            <div data-role="header">    
               <h1>
                  Page 2
                </h1>     
            </div>        
            
            <div data-role="content">         
            </div>        
            
            <div data-role="footer">         
            </div><!-- /fotoer -->     
            
        </div><!-- /page --> 

        <div data-role="page" id="myprofile">
          <div data-role="header" data-theme="a" id="header1">
             <h3>My Profile</h3>
             <a href="#" data-icon="back" data-iconpos="notext" data-rel="back">Back</a>
          </div><!-- /header --> 

          <div data-role="main">
              <form class="userform">
                  <h2>Update My Profile</h2>
                  <label for="name">Full Name</label>
                  <input type="text" name="fullname" id="fullname" value="" data-clear-btn="true" data-mini="true"> 

                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" value="" data-clear-btn="true" data-mini="true">

                  <label for="name">Phone</label>
                  <input type="text" name="phone" id="phone" value="" data-clear-btn="true" data-mini="true">

                  <label for="name">Pin BB</label>
                  <input type="text" name="fullname" id="fullname" value="" data-clear-btn="true" data-mini="true">

                  <label for="name">Facebook</label>
                  <input type="text" name="facebook" id="facebook" value="" data-clear-btn="true" data-mini="true">

                  <label for="name">Twitter</label>
                  <input type="text" name="twitter" id="twitter" value="" data-clear-btn="true" data-mini="true">

                  <label for="name">Instagram</label>
                  <input type="text" name="instagram" id="instagram" value="" data-clear-btn="true" data-mini="true">

                  <label for="name">Status</label>
                  <input type="text" name="status" id="status" value="" data-clear-btn="true" data-mini="true">

                  <div class="ui-grid-a">
                      <div class="ui-block-a"><a href="#" data-rel="back" data-role="button" data-theme="c" data-mini="true">Cancel</a></div>
                      <div class="ui-block-b"><a href="#" data-rel="back" data-role="button" data-theme="b" data-mini="true">Save</a></div>
                  </div>
            </form>
          </div> <!-- /content --> 

          <div data-role="footer">
            <h1>Footer Text</h1>
          </div>
        </div>  <!-- /footer --> 

        <!-- friend profile -->
        <div data-role="page" id="friendprofile">
          <div data-role="header" data-theme="a" id="header1">
             <h3>My Friend Profile</h3>
             <a href="#" data-icon="back" data-iconpos="notext" data-rel="back">Back</a>
          </div><!-- /header --> 

          <div data-role="main">
              <form class="userform">
                  <h2>Friend Profile</h2>
                  <label for="name">Full Name</label>
                  <input type="text" name="fullname" id="friendfullname" value="" data-mini="true" data-clear-btn="false" readonly> 

                  <label for="email">Email</label>
                  <input type="email" name="email" id="friendemail" value="" data-mini="true" data-clear-btn="false" readonly>

                  <label for="name">Phone</label>
                  <input type="text" name="phone" id="friendphone" value="" data-mini="true" data-clear-btn="false" readonly>

                  <label for="name">Pin BB</label>
                  <input type="text" name="pinbb" id="friendpinbb" value="" data-mini="true" data-clear-btn="false" readonly>

                  <label for="name">Facebook</label>
                  <input type="text" name="facebook" id="friendfacebook" value="" data-mini="true" data-clear-btn="false" readonly>

                  <label for="name">Twitter</label>
                  <input type="text" name="twitter" id="friendtwitter" value="" data-mini="true" data-clear-btn="false" readonly>

                  <label for="name">Instagram</label>
                  <input type="text" name="instagram" id="friendinstagram" value="" data-mini="true" data-clear-btn="false" readonly>
            </form>
          </div> <!-- /content --> 

          <div data-role="footer">
            <h1>Footer Text</h1>
          </div>
        </div>  <!-- /footer --> 

    </body>
</html>