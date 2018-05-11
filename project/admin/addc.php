
<div class="container-fluid" >

    <div class="row">
        <div class="col-sm-12" style="padding-top:50px; padding-left:200px;">
            <form method="post" name="addc" action="addcquery.php" class="form-horizontal" enctype="multipart/form-data">
                <div class="row control-group" style="margin-bottom:30px;">
                        <div class="form-group col-sm-6">
                            <label style="color:white;" for="name">GameID:</label>
                          </div>
                            <div class="form-group col-sm-8">
                               <input type="text" class="form-control home" name="gameid" placeholder="GameID" id="gameid" required>
                            </div>
                        
                    </div>
               <div class="row control-group" style="margin-bottom:20px;">
                        <div class="form-group col-sm-6">
                            <label style="color:white;" for="name">Name:</label>
                          </div>
                            <div class="form-group col-sm-8">
                               <input type="text" class="form-control home" name="name" placeholder="Name of the game" id="name" required>
                            </div>
                        
                    </div>
                    <div class="row control-group" style="margin-bottom:20px;">
                        <div class="form-group col-sm-2" style="padding-top:10px; margin-right:10px;">
                            <label style="color:white;">Cover:</label>
                         </div>
                            <div class="form-group col-sm-4">
                               <input type="file" class="form-control home" name="path" id="path" style="min-height:50px;" required>
                            </div>
                    </div>
                    
                    <div class="row control-group" style="margin-bottom:15px;">
                        <div class="form-group col-sm-6">
                            <label style="color:white;" for="desc">Desciption:</label>
                          </div>
                            <div class="form-group col-sm-8">
                               <textarea rows="5" cols="50" class="form-control home" name="desc" placeholder="Description of the game" id="desc" required></textarea>
                            </div>
                        
                    </div>
                    
                    <br>
                    
                    <div class="row">
                        <div class="form-group col-sm-8">
                            <input type="submit" name="add" class="btn-lg btn-primary button" value="Add" style="margin-right:50px;"> 
                        </div>
                    </div>
            </form>
        </div>
    </div>

</div>