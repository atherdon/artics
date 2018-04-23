

------------------------

Order Tracking Option



## Easy Checkout

We have concluded an easy and smooth checkout option in our bigbasket clone app so that the users do not deter from finalizing a purchase.

## Diverse Categories

A number of product categories are there that make a listing of the products in the sections- organized category and subcategory of the same.

## Enhanced Navigation

A great user experience that also allows easy navigation is all that our grocery app development service focuses onto.

--------------------------


--------------------------


----------------------

--------------



-------




feat: use or create similar to existed at data / tests folder tests


Q: Should we or must to use graph ql and what it'll change for us


1) Before connection to the api server - using json templates that we have stored in our data folder
 a) we'll use simple data sample, related to free menu release (problem that this structure not very correlate with database schema that we have at this moment at recipe api).
 maybe @atherdon can check data structure that returns from recipe api free menu edition?

 b) we'll use extended data sample, that related to weekly menu sample

2) App connects to our API and retrieve that data.
we cannot autogenerate grocerylist - we only display it


Think about microservices
or about few places where data can be stored
what i mean: maybe later we'll split our api server into a few, in order to make modularity work better.
and our clients can have that case: they can create recipes and store them at one place()one url,
but data related to shopping list actions will be sent to another places.
so we need to prepare for that thing


Продумать защиту внутри апп от сломанных данных или неправильной структуры, которуб мы не одобряем
тоесть внутри апп у нас есть кактой то темлпейт - по которому и должны у нас приходить данные
например есть 5 рецептов и один из них поломан - изза этого могут сломаться вывод всех рецептов
поэтому мы дожны на првом этапе просто пропускать данный рецепт и невыводить его - если его данные неустраивают нас


Q: what path we should follow? have queries with full data response and at app we'll grab only inportant data and display it on page
or we must have a lot of small queries that will return data partially.
like have recipe id - get only allergies, or nutritions or directions



Move samples data to standalone npm package



  // Form data for the login modal
  $scope.loginData = {};

  // Create the login modal that we will use later
  $ionicModal.fromTemplateUrl('templates/login.html', {
    scope: $scope
  }).then(function(modal) {
    $scope.modal = modal;
  });

  // Triggered in the login modal to close it
  $scope.closeLogin = function() {
    $scope.modal.hide();
  };

  // Open the login modal
  $scope.login = function() {
    $scope.modal.show();
  };

  // Perform the login action when the user submits the login form
  $scope.doLogin = function() {
    console.log('Doing login', $scope.loginData);

    // Simulate a login delay. Remove this and replace with your login
    // code if using a login system
    $timeout(function() {
      $scope.closeLogin();
    }, 1000);
  };
})


/* recipes stuff */
.controller('weeklyMenuCtrl', function($scope, $stateParams) {
})

.controller('singleRecipeCtrl', function($scope, $stateParams) {
})

.controller('loginCtrl', function($scope, $stateParams) {
})

.controller('signupCtrl', function($scope, $stateParams) {
})

.controller('freeRecipesCtrl', function($scope, $stateParams) {
})

.controller('styledSingleRecipeCtrl', function($scope, $stateParams) {
})

.controller('ingredientsCtrl', function($scope, $stateParams) {
})

.controller('uXSingleRecipeCtrl', function($scope, $stateParams) {
})

.controller('uXSingleRecipe2Ctrl', function($scope, $stateParams) {
})

.controller('directionsCtrl', function($scope, $stateParams) {
})

.controller('groceryListSettingsCtrl', function($scope, $stateParams) {
})

.controller('groceryListCtrl', function($scope, $stateParams) {
})

.controller('recipesCalendarCtrl', function($scope, $stateParams) {
})

.controller('dRYGOODSCtrl', function($scope, $stateParams) {
})

;
