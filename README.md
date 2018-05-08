# Project 4
+ By: *Nicolas Vogelpoth*
+ Production URL: <http://p4.bookrunner.de>

## Database
Primary tables:
  + `dashboards`
  + `reports`
  + `users`
  
Pivot table(s):
  + `dashboard_report`


## CRUD
*For the below CRUD routes to work, you have to be an authenticated user. Jill and Jamal are available as per the project specifications.*

__Create__
  + Visit <http://p4.bookrunner.de/dashboards>; choose the Add a New Dashboard button on the top of the page
  + Fill in a dashboard name
  + Click *Save*
  + Observe confirmation message and newly created dashboard
  
__Read__
  + Visit <http://p4.bookrunner.de/dashboards> see a listing of all dashboards that belong to the authenticated user
  
__Update__
  + Visit <http://p4.bookrunner.de/dashboards>; choose the Edit button in the footer of a dashboard card
  + Change the name or the reports registered for this dashboard
  + Click *Save Changes*
  + Observe confirmation message and updated dashboard
  
__Delete__
  + Visit <http://p4.bookrunner.de>; choose the Remove button in the footer of a dashboard card
  + Confirm deletion
  + Observe confirmation message and that the dashboard is no longer listed

## Outside resources
  + Styling via [Bootstrap](http://getbootstrap.com/docs/4.1/getting-started/introduction/) and Laravel's master layout file
  + Icons via [Fontawesome](https://fontawesome.com/)
  + Frontend components via [Vue.js](https://vuejs.org/v2/guide/index.html)
  + Graph vue component as in this [Laracast](https://laracasts.com/series/charting-and-you/episodes/3)
  + The charts themselves via [Chart.js](http://www.chartjs.org/docs/latest/)
  + Custom helper functions as described on [Laravel News](https://laravel-news.com/creating-helpers)

## Code style divergences
*In a few cases, my PHP code extended beyond 80 characters.*

## Notes for instructor
*Project 4 implements a prototype for a reporting dashboard. A user can register and customize dashboards so that they show reports which are most relevant to the user. Authorization via policies ensures that users have only access to their own dashboards.*

*In this prototype I am providing 6 generic reports with hard-coded data. The idea is to extend this application so that the reports remain generic (e.g. an asset allocation) but the underlying data is specific to the user (e.g. the allocation of a fund the user manages).*

