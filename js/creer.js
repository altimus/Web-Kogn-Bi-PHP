var myApp = angular.module('myApp',[]);

myApp.controller('CreerController', ['$scope', function($scope) {
$scope.regions = ["Dakar","Thies","Louga","Saint Louis","Matam","Kaolack","Fatick","Diourbel","Ziguinchor","Kaffrine", "Kolda","Kédougou", "Sédhiou"];



  $scope.verifLocalite = true;

  $scope.regionChange = function(region){
    $scope.lieux = [];
    $scope.verifLocalite = false;

      switch(region){
       case "Dakar":
               $scope.lieux = ["Mermoz ","Sicap","Liberté","Centre ville","Médina","Dieuppeur"];
           break;
       default :
               $scope.lieux.push(region);
       break;
   }
};
}]);
