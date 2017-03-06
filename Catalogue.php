
<!DOCTYPE html>  
 <!-- index.php !-->  
 <html>  
      <head>
	  <style>
	 .form-style-3{
	max-width: 300px;
	font-family: "arial", "Lucida Grande", sans-serif;
		background: rgba() url(images/yellow.jpg) repeat-x left top;
		    padding: 20px 0px 0px 0px;
			margin-top: -20px;
}
.form-style-3 label{
	display:block;
	margin-bottom: 10px;
}
.form-style-3 label > span{
	float: left;
	width: 100px;
	color: #130108;
	font-weight: bold;
	font-size: 12px;
	text-shadow: 1px 1px 1px #fff;
}
.form-style-3 fieldset{
	border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	    margin: 0px 0px 10px 0px;
    border: 2px solid  yellow;
    background: #e7e5e5;
    padding: 20px;
	box-shadow: inset 0px 0px 15px #FFE5E5;
	-moz-box-shadow: inset 0px 0px 15px #FFE5E5;
	-webkit-box-shadow: inset 0px 0px 15px #FFE5E5;
}
.form-style-3 fieldset legend{
	color: #130108;
	border-top: 1px solid #FFD2D2;
	border-left: 1px solid #FFD2D2;
	border-right: 1px solid #FFD2D2;
	border-radius: 5px 5px 0px 0px;
	-webkit-border-radius: 5px 5px 0px 0px;
	-moz-border-radius: 5px 5px 0px 0px;
	background: #bdb1b1;
	padding: 5px 8px 3px 8px;
	box-shadow: -0px -1px 2px #F1F1F1;
	-moz-box-shadow:-0px -1px 2px #F1F1F1;
	-webkit-box-shadow:-0px -1px 2px #F1F1F1;
	font-weight: normal;
	font-size: 30px;
}
.form-style-3 textarea{
	width:250px;
	height:100px;
}
.form-style-3 input[type=text],
.form-style-3 input[type=date],
.form-style-3 input[type=datetime],
.form-style-3 input[type=number],
.form-style-3 input[type=search],
.form-style-3 input[type=time],
.form-style-3 input[type=url],
.form-style-3 input[type=email],
.form-style-3 select, 
.form-style-3 textarea{
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border: 1px solid #FFC2DC;
	outline: none;
	color: #130108;
	padding: 5px 8px 5px 8px;
	box-shadow: inset 1px 1px 4px #FFD5E7;
	-moz-box-shadow: inset 1px 1px 4px #FFD5E7;
	-webkit-box-shadow: inset 1px 1px 4px #FFD5E7;
	background: #FFEFF6;
	width:50%;

}
.form-style-3  input[type=submit],
.form-style-3  input[type=button]{
background: #130108;
    border: 1px solid #130108;
    padding: 5px 15px 5px 15px;
    color: #FFCBE2;
    /* box-shadow: inset -1px -1px 3px #FF62A7; */
    -moz-box-shadow: inset -1px -1px 3px #FF62A7;
    /* -webkit-box-shadow: inset -1px -1px 3px #FF62A7; */
    border-radius: 3px;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    font-weight: bold;
}
.form-style-3 .required{
	color:red;
	font-weight:normal;
}
	  </style>
           <title></title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
      </head>  
      <body>  
	  
  <?php include 'scrollc.php';?>
  				
           <br /><br /> 
	
 <br>
 <br>

	  	 
			   
           <div class="container" style="width:300px; margin-left:-90px;padding:px;font-size:14px;">  
                <p> <align="center"> <h3><strong><?php echo "Customer Lists"; ?></strong></p> </h3> 
                <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">  
                    
			 <div class="form-style-3">	  
<fieldset>
 <a href="signupp/index.html">+Search</a> </fieldset>
 </div>
	
					
                     <input type="hidden" ng-model="colid" />  
                     <input type="submit" name="btnInsert" class="btn btn-info" ng-click="insertData()" value="{{btnName}}"/>  
                     <br /><br /> 
					 
                     <table class="table table-bordered" background: "black border" : 2px solid #FFFEB5>  
                          <tr>  
						   
							     <th>Customer ID</th>
				 <th>Email</th>
				   <th>Password</th>
				 <th>Confirm Password</th>
                                </tr>  
                          <tr ng-repeat="x in names"> 
				
		<td>{{x.cid}}</td> 	
						  		
									
						  			<td>{{x.email}}</td>
										<td>{{x.password}}</td>
											<td>{{x.cpassword}}</td>

	 	
                               </tr>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 var app = angular.module("myapp",[]);  
 app.controller("usercontroller", function($scope, $http){  
      //$scope.btnName = "";  
      $scope.insertData = function(){  
           if($scope.awbno == null)  
           {  
                alert("customer ID Name is required");  
           }  
           else if($scope.ncnd == null)  
           {  
                alert("status Name is required");  
           }  
		       else if($scope.qty == null)  
           {  
                alert("Consulate ID is required");  
           }  
		             else if($scope.jobout == null)  
           {  
                alert("status Name is required");  
           }  
		             else if($scope.sing == null)  
           {  
                alert("Consulate ID is required");  
           } 
		             else if($scope.remarks == null)  
           {  
                alert("status Name is required");  
           }  
		   else if($scope.cid == null)  
           {  
                alert("status Name is required");  
           }  

           else  
           {  
                $http.post(  
                     "insert.php",  
                     {'cid':$scope.cid, 'awbno':$scope.awbno, 'ncnd':$scope.ncnd, 'qty':$scope.qty, 'jobout':$scope.jobout, 'sing':$scope.sing, 'remarks':$scope.remarks, 'btnName':$scope.btnName, 'delid':$scope.delid}  
                ).success(function(data){  
                     alert(data);  
                     $scope.awbno = null;  
                     $scope.ncnd = null;  
					 $scope.qty = null;
                     $scope.jobout = null;  
                     $scope.sing = null;  
					 $scope.remarks = null; 
                 $scope.cid = null; 
                });  
           }  
      }  
      $scope.displayData = function(){  
           $http.get("select1.php")  
           .success(function(data){  
                $scope.names = data;  
           });  
      }  
      $scope.updateData = function(colid, cid, cc, instatus, outstatus, batchid, batchdate, batchoutid, batchoutdate){  
	    $scope.awbno = awbno;
           $scope.ncnd = ncnd;  
           $scope.qty = qty;  
           $scope.jobout = jobout;
           $scope.sing = sing; 
$scope.remarks = remarks;
$scope.cid = cid;		   
           	   
           $scope.btnName = "Update";  
      }  
 });  
 </script>  