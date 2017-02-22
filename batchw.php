<html>
<body>
<form action="batchw.php" method="post">
 <div class = "form-style-3">
 <fieldset><legend> Please Enter your BatchDate </legend>
  
           <label for="field3"><span>Batch Date <span class="required">*</span></span>
		   <input type="text" class="input-field" id="batchdate" name="batchdate" /></label>

            
                
                           <input type="submit" value="Submit"  /></td>
          
    
		</fieldset>
		</div>
</form>
</body>
</html>
<?php  
 //select.php  
 $connect = mysqli_connect("localhost", "root", "", "consulate");  
 $output = array();  
 $query = "SELECT * FROM colletion where batchdate = '$_POST[batchdate]'";  
 $result = mysqli_query($connect, $query);  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output[] = $row;  
      }  
      echo json_encode($output);  
 }  
 ?> 

 <!DOCTYPE html>  
 <!-- index.php !-->  
 <html>  
      <head>  
           <title></title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
      </head>  
      <body>  
	  <table class="table table-bordered" background: "blue border" : 2px solid #FFFEB5>  
                          <tr>  
                                <th>Customer ID</th>  
								<th>Consulate ID</th>  
                           		<th>Instatus</th>
								 <th>Outstatus</th>  
                           		<th>Batch-In Date</th>
								 <th>Batch-In ID</th>  
                           		<th>Batchout ID</th>
 <th>Batch-out-Date</th>  
 	<th>ptype</th>
 <th>dtype</th>  
  <th>Reason for Rejection</th>  
                               <th>Update</th>  
                          </tr>  
                          <tr ng-repeat="x in names">  
                             <td>{{x.cid}}</td>                                         
								<td>{{x.cc}}</td>  
                               <td>{{x.instatus}}</td> 
							<td>{{x.outstatus}}</td>  
                               <td>{{x.batchdate}}</td>
								<td>{{x.batchid}}</td>  
                               <td>{{x.batchoutid}}</td>  
								<td>{{x.batchoutdate}}</td>  
                               
                            <td>{{x.ptype}}</td>  
								<td>{{x.dtype}}</td>  
								<td>{{x.reason}}</td>  
                               <td><button ng-click="updateData(x.reason, x.colid, x.cid, x.instatus, x.outstatus, x.batchid, x.batchdate, x.batchoutid, x.batchoutdate, x.ptype, x.dtype)" class="btn btn-info btn-xs">Update</button></td>  
                          </tr>  
                     </table>  
	  <form action="batchw.php" method="post">
           <br /><br />  
           <div class="container" style="width:300px; margin-left:20px;padding:px;font-size:10px;">  
                <h3 align="center">Batch Status</h3>  
                <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">  
                     <label>Customer ID</label>  
                     <input type="text" name="cid" ng-model="cid" class="form-control" />  
                     <br />  
					        
					         <label>Consulate ID</label>  
                     <input type="text" name="cc" ng-model="cc" class="form-control" />  
                     <br /> 
		 <label>batchid</label>  
                     <input type="text" name="batchid" ng-model="batchid" class="form-control" />  
                     <br />  
					 <label>batchdate</label>  
                     <input type="text" name="batchdate" ng-model="batchdate" class="form-control" />  
                     <br /> 					 
<label>InStatus</label>  
                     <input type="text" name="instatus" ng-model="instatus" class="form-control" />  
                     <br />
 <label>batchoutid</label>  
                     <input type="text" name="batchoutid" ng-model="batchoutid" class="form-control" />  
                     <br />  
					 <label>batchoutdate</label>  
                     <input type="text" name="batchoutdate" ng-model="batchoutdate" class="form-control" />  
                     <br />  					 
 <label>OutStatus</label>  
                     <input type="text" name="outstatus" ng-model="outstatus" class="form-control" />  
                     <br /> 
 <label>Product Type</label>  
                     <input type="text" name="ptype" ng-model="ptype" class="form-control" />  
                     <br /> 
 <label>Delivery Type</label>  
                     <input type="text" name="dtype" ng-model="dtype" class="form-control" />  
                     <br /> 
 <label>Reason for Rejection</label>  
                     <input type="text" name="reason" ng-model="reason" class="form-control" />  
                     <br /> 						 
            
					
                     <input type="hidden" ng-model="colid" />  
                     <input type="submit" name="btnInsert" class="btn btn-info" ng-click="insertData()" value="{{btnName}}"/>  
                     <br /><br />  
                     <table class="table table-bordered" background: "blue border" : 2px solid #FFFEB5>  
                          <tr>  
                                <th>Customer ID</th>  
								<th>Consulate ID</th>  
                           		<th>Instatus</th>
								 <th>Outstatus</th>  
                           		<th>Batch-In Date</th>
								 <th>Batch-In ID</th>  
                           		<th>Batchout ID</th>
 <th>Batch-out-Date</th>  
 	<th>ptype</th>
 <th>dtype</th>  
  <th>Reason for Rejection</th>  
                               <th>Update</th>  
                          </tr>  
                          <tr ng-repeat="x in names">  
                             <td>{{x.cid}}</td>                                         
								<td>{{x.cc}}</td>  
                               <td>{{x.instatus}}</td> 
							<td>{{x.outstatus}}</td>  
                               <td>{{x.batchdate}}</td>
								<td>{{x.batchid}}</td>  
                               <td>{{x.batchoutid}}</td>  
								<td>{{x.batchoutdate}}</td>  
                               
                            <td>{{x.ptype}}</td>  
								<td>{{x.dtype}}</td>  
								<td>{{x.reason}}</td>  
                               <td><button ng-click="updateData(x.reason, x.colid, x.cid, x.instatus, x.outstatus, x.batchid, x.batchdate, x.batchoutid, x.batchoutdate, x.ptype, x.dtype)" class="btn btn-info btn-xs">Update</button></td>  
                          </tr>  
                     </table>  
                </div>  
</form>           </div> 
		   
      </body>  
 </html> 
 <script>  
 var app = angular.module("myapp",[]);  
 app.controller("usercontroller", function($scope, $http){  
      $scope.btnName = "ADD";  
      $scope.insertData = function(){  
           if($scope.cid == null)  
           {  
                alert("customer ID Name is required");  
           }  
           else if($scope.instatus == null)  
           {  
                alert("status Name is required");  
           }  
		       else if($scope.cc == null)  
           {  
                alert("Consulate ID is required");  
           }  
		             else if($scope.outstatus == null)  
           {  
                alert("status Name is required");  
           }  
		       else if($scope.batchid == null)  
           {  
                alert("Consulate ID is required");  
           } 
		             else if($scope.batchdate == null)  
           {  
                alert("status Name is required");  
           }  
		       else if($scope.batchoutid == null)  
           {  
                alert("Consulate ID is required");  
           } 
		          else if($scope.batchoutdate == null)  
           {  
                alert("Consulate ID is required");  
           } 
           else  
           {  
                $http.post(  
                     "insert.php",  
                     {'cid':$scope.cid, 'instatus':$scope.instatus, 'cc':$scope.cc, 'outstatus':$scope.outstatus, 'batchid':$scope.batchid, 'batchdate':$scope.batchdate, 'batchoutdate':$scope.batchoutdate, 'batchoutid':$scope.batchoutid, 'btnName':$scope.btnName, 'colid':$scope.colid}  
                ).success(function(data){  
                     alert(data);  
                     $scope.colid = null;  
                     $scope.cid = null;  
					  $scope.instatus = null;
  $scope.outstatus = null;  
                     $scope.batchid = null;  
					  $scope.batchdate = null; 
  $scope.rid = null;  
                     $scope.batchoutid = null;  
					  $scope.batchoutdate = null; 					  
                     $scope.btnName = "ADD";  
                     $scope.displayData();  
                });  
           }  
      }  
      $scope.displayData = function(){  
           $http.get("batchw.php")  
           .success(function(data){  
                $scope.names = data;  
           });  
      }  
      $scope.updateData = function(colid, cid, cc, instatus, outstatus, batchid, batchdate, batchoutid, batchoutdate){  
	    $scope.instatus = instatus;
           $scope.colid = colid;  
           $scope.cc = cc;  
           $scope.cid = cid; 

           $scope.outstatus = outstatus;  
           $scope.batchid = batchid; 
     $scope.batchdate = batchdate;  
           $scope.batchoutid =batchoutid;  
           $scope.bathoutdate = bathcoutdate; 		   
           $scope.btnName = "Update";  
      }  
 });  
 </script>   