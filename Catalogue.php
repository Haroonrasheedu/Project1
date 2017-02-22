
<!DOCTYPE html>  
 <!-- index.php !-->  
 <html>  
      <head>  
           <title></title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
      </head>  
      <body>  
	  
  <?php include 'scrollc.php';?>
           <br /><br />  
           <div class="container" style="width:300px; margin-left:-90px;padding:px;font-size:12px;">  
                <p> <align="center"> <h3><strong><?php
echo "Customer Lists";

?></strong></p> </h3> 
                <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">  
                    
			 
					
					
                     <input type="hidden" ng-model="colid" />  
                     <input type="submit" name="btnInsert" class="btn btn-info" ng-click="insertData()" value="{{btnName}}"/>  
                     <br /><br />  
                     <table class="table table-bordered" background: "black border" : 2px solid #FFFEB5>  
                          <tr>  
						    <th>Consulate Date</th>
							     <th>Customer ID</th>
							  <th>Passport No</th> 
						       <th>Email-ID</th> 
					
                                </tr>  
                          <tr ng-repeat="x in names"> 
	<td>{{x.coundate}}</td> 			
		<td>{{x.cid}}</td> 	
						  			<td>{{x.passno}}</td> 
									
						  			<td>{{x.email}}</td>
	 	
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