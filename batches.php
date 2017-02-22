<!DOCTYPE html>  
 <!-- index.php !--> 
<?php
include 'scrollcus.php';
?> 
 <html>  
      <head>  
           <title></title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:300px; margin-left:20px;padding:px;font-size:10px;">  
                <h3 align="center">Consulate Registration-Batch File</h3>  
                <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">  
                     <label>Customer ID</label>  
                     <input type="text" name="cid" ng-model="cid" class="form-control" />  
                     <br />  
					         <label>Status</label>  
                     <input type="text" name="status" ng-model="status" class="form-control" />  
                     <br />  
                     <label>Consulate Id</label>  
                     <input type="text" name="cc" ng-model="cc" class="form-control" />  
                     <br />  
                     <input type="hidden" ng-model="bid" />  
                     <input type="submit" name="btnInsert" class="btn btn-info" ng-click="insertData()" value="{{btnName}}"/>  
                     <br /><br />  
                     <table class="table table-bordered" background: "blue border" : 2px solid #FFFEB5>  
                          <tr>  
                                <th>Customer ID</th>  
                           		<th>status</th>
								<th>Product Type</th>
								<th>Delivery Type</th>
									<th>Amount</th>
								<th>Sorting Type</th>
								<th>Counter date</th>
								<th>Processing City</th>
									<th>Pieces</th>
									<th>Description</th>
									<th>Consulate ID</th>
								
 
                               <th>Update</th>  
                          </tr>  
                          <tr ng-repeat="x in names">  
                             <td>{{x.cid}}</td>                                         
								<td>{{x.status}}</td>  
                               <td>{{x.ptype}}</td> 
							<td>{{x.dtype}}</td>  
                               <td>{{x.amt}}</td>
								<td>{{x.stype}}</td>  
                               <td>{{x.coundate}}</td>  
								<td>{{x.pcity}}</td>  
                               <td>{{x.qty}}</td> 
								<td>{{x.descr}}</td>  
								<td>{{x.cc}}</td>  
                  
                               <td><button ng-click="updateData(x.cid, x.status, x.cc)" class="btn btn-info btn-xs">Update</button></td>  
                          </tr>  
                     </table>  
                </div>  
           </div>  
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
           else if($scope.status == null)  
           {  
                alert("status Name is required");  
           }  
		       else if($scope.cc == null)  
           {  
                alert("Consulate ID is required");  
           }  
           else  
           {  
                $http.post(  
                     "insert.php",  
                     {'cid':$scope.cid, 'status':$scope.status, 'ptype':$scope.ptype, 'btnName':$scope.btnName, 'cc':$scope.cc}  
                ).success(function(data){  
                     alert(data);  
                     $scope.rid = null;  
                     $scope.cid = null;  
					  $scope.status = null;  
                     $scope.btnName = "ADD";  
                     $scope.displayData();  
                });  
           }  
      }  
      $scope.displayData = function(){  
           $http.get("select.php")  
           .success(function(data){  
                $scope.names = data;  
           });  
      }  
      $scope.updateData = function(bid, rid, cid, status){  
	    $scope.status = status;
           $scope.bid = bid;  
           $scope.rid = rid;  
           $scope.cid = cid;  
           $scope.btnName = "Update";  
      }  
 });  
 </script>  