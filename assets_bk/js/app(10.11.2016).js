var app = angular.module('projectList', []);
app.controller('ListData',function($scope, $rootScope, $http){
	console.log('Controller Loaded');
	$scope.noRecord=false;
	$scope.recordFound = true;
	$http({
      method: 'GET',
      url: 'http://111.93.227.162/pms/api/projectList'
    }).then(function successCallback(res) {
        console.log(res);
        $scope.result = res.data;
        if($scope.result.total_count==0){
        	$scope.noRecord=true;
        	$scope.recordFound = false;
        }
        $scope.record = $scope.result.ProjectList;
        console.log($scope.record);
    }, function errorCallback(res) {
        console.log(res.data)
    });

    $scope.OpenMileStone = function(project_id){
        $scope.milestones = [];
        $scope.addfield=function(){
            $scope.milestones.push({})
        }
        //console.log(project_id);
    	$('#myModal1').modal('show');
    }

    $scope.SubmitMilestone = function(mileStone){
        console.log(mileStone);
    }
    
})