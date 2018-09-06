var dashboardApp = new Vue({
  el: '#dashboard',
  data: {

  "name" : "Tapestry",
  "short_description": "Build a visualization layer for the project dashboard",
  "start_date" : "2018-07-01",
  "target_date" : "2018-11-03",
  "budget" : "4950000",
  "spent" : "3456700",
  "projected_spend": "4740500",
  "weekly_effort_target": 400

},
 methods: {
   pretty_date: function(d) {
     return moment(d).format('l')
   }


 },
 computed: {
   days_left: function(){
     return moment(this.target_date).diff(moment(), 'days')
   },
   pretty_target_date:function () {
     return this.pretty_date(this.target_date)
   }




 },
})
