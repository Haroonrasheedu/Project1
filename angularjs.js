$http.get('/schedule/employeeshifts').success(function(shiftdata) {
    $scope.employeeshifts = shiftdata;
});