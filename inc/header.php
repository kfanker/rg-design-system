<!DOCTYPE html>
<html lang="en">
<head>
<title>rateGenius Portal</title>
<meta name="mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
<link rel="shortcut icon" href="./img/rg-favicon.ico" type="image/x-icon"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300italic,400,300,500,600,700|Material+Icons" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
</head>
<body>
<div id="app">
  <v-app id="inspire"> 
    <!--Left Nav-->
    <v-navigation-drawer app clipped v-model="drawer" fixed>
      <v-list dense>
        <template>
          <v-list-tile href="index.php">
            <v-list-tile-content>
              <v-list-tile-title class="rg-gray--text"> Home </v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
          <v-list-tile href="buttons.html">
            <v-list-tile-content>
              <v-list-tile-title class="rg-gray--text"> Buttons </v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
<v-list-tile href="colors.html">
            <v-list-tile-content>
              <v-list-tile-title class="rg-gray--text"> Colors</v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
          <v-list-tile href="icons.html">
            <v-list-tile-content>
              <v-list-tile-title class="rg-gray--text"> Icons </v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
          <v-list-tile href="badges.php">
            <v-list-tile-content>
              <v-list-tile-title class="rg-gray--text"> Badges </v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
          <v-list-tile href="lists.html">
            <v-list-tile-content>
              <v-list-tile-title class="rg-gray--text"> Lists </v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
          <v-list-tile href="tabs.html">
            <v-list-tile-content>
              <v-list-tile-title class="rg-gray--text"> Tabs </v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
          <v-list-tile href="tables.html">
            <v-list-tile-content>
              <v-list-tile-title class="rg-gray--text"> Tables </v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
          <v-list-tile href="dialogs.html">
            <v-list-tile-content>
              <v-list-tile-title class="rg-gray--text"> Dialogs </v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
          <v-list-tile href="notifications.html">
            <v-list-tile-content>
              <v-list-tile-title class="rg-gray--text"> Notifications </v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
          <v-list-tile href="tooltips.html">
            <v-list-tile-content>
              <v-list-tile-title class="rg-gray--text"> Tooltips </v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
          <v-list-tile href="formatting.html">
            <v-list-tile-content>
              <v-list-tile-title class="rg-gray--text"> Data Formatting </v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
        </template>
      </v-list>
    </v-navigation-drawer>
    <!--End Left Nav--> 
    
    <!--Top Toolbar Nav--> <v-toolbar app clipped-right clipped-left class="nav-bg rg-gray--text elevation-1" light fixed>
      <v-toolbar-side-icon  color="rg-gray--text" @click.stop="drawer = !drawer"></v-toolbar-side-icon>
      <v-toolbar-title>#6000147 Elizabeth Williamson </v-toolbar-title>
      <v-spacer></v-spacer>
      <div v-if="$vuetify.breakpoint.mdAndUp">
        <v-tooltip bottom>
          <v-btn icon slot="activator">
            <v-icon color="rg-gray">call</v-icon>
          </v-btn>
          <span>Call Customer</span> </v-tooltip>
        <v-tooltip bottom>
          <v-btn icon slot="activator">
            <v-icon color="rg-gray">email</v-icon>
          </v-btn>
          <span>Email Customer</span> </v-tooltip>
        <v-tooltip bottom>
          <v-btn icon slot="activator">
            <v-icon color="rg-gray">textsms</v-icon>
          </v-btn>
          <span>Text Customer</span> </v-tooltip>
        <v-tooltip bottom>
          <v-btn icon slot="activator">
            <v-icon color="rg-gray">library_add</v-icon>
          </v-btn>
          <span>Add Note</span> </v-tooltip>
        <v-tooltip bottom>
          <v-btn icon slot="activator">
            <v-icon color="rg-gray">library_books</v-icon>
          </v-btn>
          <span>Notes</span> </v-tooltip>
        <v-menu offset-y>
          <v-btn icon slot="activator">
            <v-icon color="rg-gray">more_vert</v-icon>
          </v-btn>
          <v-list class="rg-light-gray" light>
            <v-list-tile @click="">
              <v-list-tile-title class="rg-gray--text">
                <v-icon left color="rg-gray">swap_calls</v-icon>
                Reassign </v-list-tile-title>
            </v-list-tile>
            <v-list-tile @click="">
              <v-list-tile-title class="rg-gray--text">
                <v-icon  left color="rg-gray">do_not_disturb_alt</v-icon>
                Cancel </v-list-tile-title>
            </v-list-tile>
            <v-list-tile @click="">
              <v-list-tile-title class="rg-gray--text">
                <v-icon  left color="rg-gray">swap_horiz</v-icon>
                Transfer </v-list-tile-title>
            </v-list-tile>
            <v-list-tile @click="">
              <v-list-tile-title class="rg-gray--text">
                <v-icon left color="rg-gray">warning</v-icon>
                Exception </v-list-tile-title>
            </v-list-tile>
            <v-list-tile @click="">
              <v-list-tile-title class="rg-gray--text">
                <v-icon  left color="rg-gray">check</v-icon>
                Complete </v-list-tile-title>
            </v-list-tile>
          </v-list>
        </v-menu>
      </div>
    </v-toolbar>
    <!--End Top Toolbar Nav-->
    
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
