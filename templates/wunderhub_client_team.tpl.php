<div class="team" data-ng-controller="WHTeamController">
  <div class="team__member person" data-ng-repeat="person in Team">
    <div class="person__picture" data-ng-bind-html="person.picture"></div>
    <h3 class="person__name">
      <span data-ng-bind="person.firstName"></span>
      <span data-ng-bind="person.lastName"></span>
    </h3>
    <div class="person__job-title" data-ng-bind="person.jobTitle"></div>
    <div class="person__office" data-ng-bind="person.office"></div>
  </div>
</div>