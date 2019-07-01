< ?php include 'header.php'; ?>
    
    <v-content class="mb-4">
      <div class="header-bg"> 
        <!--Top Status Bar-->
        
        <v-layout class="pa-2 status">
          <v-flex xs12> <span class="pr-2">
            <label>State:</label>
            <span class="caption">TX</span></span> | <span class="pr-2 pl-2">
            <label>Source:</label>
            <span class="caption">RGD</span></span> | <span class="pr-2 pl-2">
            <label>Lender:</label>
            <span class="caption"> Andrews FCU </span></span> | <span class="pr-2 pl-2">
            <label>Status:</label>
            <span class="caption"> Ready to Print </span></span> | <span class="pr-2 pl-2">
            <label>Task:</label>
            <span class="caption"> Ship Package </span></span> </v-flex>
        </v-layout>
        <v-divider></v-divider>
        <!--End Top Status Bar-->
        
        <v-layout row wrap class="pa-3">
          <v-flex xs12>
            <div class="display-1 white--text mb-3">Badges</div>
          </v-flex>
        </v-layout>
      </div>
      <v-container fluid>
        <div> Icon Button with Badge and Tooltip
          <v-tooltip bottom>
            <v-btn flat icon slot="activator">
              <v-badge color="rg-warning" overlap small>
                <v-icon color="rg-gray">comment</v-icon>
                <span slot="badge" class="caption rg-gray--text">1</span></v-badge>
            </v-btn>
            <span>1 Sticky Note</span></v-tooltip>
        </div>
        <div class="grey lighten-3 pa-2">
          <pre class="pa-2 v-table__overflow">
	&lt;v-tooltip bottom&gt;
         &lt;v-btn flat icon slot="activator"&gt;
              &lt;v-badge color="rg-warning" overlap small&gt;
              	&lt;v-icon color="rg-gray"&gt;comment&lt;/v-icon&gt;
              	&lt;span slot="badge" class="caption rg-gray--text"&gt;1&lt;/span&gt;
	       &lt;/v-badge&gt;
         &lt;/v-btn&gt;
    &lt;span&gt;1 Sticky Note&lt;/span&gt;&lt;/v-tooltip&gt;</pre>
        </div>
      </v-container>
    </v-content>
  </v-app>
</div>
<script src="https://unpkg.com/vue/dist/vue.js"></script> 
<script src="https://unpkg.com/vuetify/dist/vuetify.js"></script> 
<script>
	
new Vue({
  el: '#app',
   data () {
	  return {
		  /*Drawers*/
        drawer: null,
		}
    },
		
    watch: {
       /*Button Spinners*/
     loader () {
        const l = this.loader
        this[l] = !this[l]
        setTimeout(() => (this[l] = false), 3000)
        this.loader = null
      }
		}
});

  </script>
</body>
</html>
