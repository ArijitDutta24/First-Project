var app = angular.module('projectList', []);
var config = { headers: {
    'Content-Type': 'application/json'
  }
}
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
        $scope.project_id = project_id;
        $scope.milestones = { fields: [] };
        //$scope.milestones = [fields : {}];
        console.log($scope.milestones);
        
        //console.log(project_id);
        $scope.milestones.fields.push({'id':'','name':''});
        $http({
            method: 'GET',
            url: 'http://111.93.227.162/pms/api/GetMileStoneList/'+project_id
        }).then(function successCallback(res) {
            console.log(res.data.result);
            if(res.data.result.length>0){
                for(var counter=0;counter<res.data.result.length;counter++){
                    $scope.milestones.fields.push({'id' : res.data.result[counter].milestone_id,'name' : res.data.result[counter].milestone_name});
                }
            }
            
        }, function errorCallback(res) {
            console.log(res.data)
        });
    	$('#myModal1').modal('show');
        $scope.addfield=function(){
            $scope.milestones.fields.push({'id':'','name':''});
            //$scope.milestones.fields.push('');
        }
    }

    $scope.SubmitMilestone = function(mileStone){
        $scope.data = {};
        $scope.data.milestone = [];
        $scope.data.project_id = $scope.project_id;
        $scope.data.milestone = mileStone;
        console.log($scope.data.milestone);
        console.log($scope.data);
        $http.post('http://111.93.227.162/pms/api/AddMileStone', $scope.data, config)
        .success(function (data, status, headers, config) {
            console.log(data);
            //alert(res.data.message);
            $('#myModal1').modal('hide');
        })
        .error(function (data, status, header, config) {
          console.log(data)
        })
    }
    
})