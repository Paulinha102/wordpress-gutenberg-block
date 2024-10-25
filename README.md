# wordpress-gutenberg-block
Desenvolvimento de blocos WordPress Gutenberg com React JS e PHP

# How to Create and Add a New Block in WordPress

## Step 1: Create a New WordPress Plugin
**In the terminal, navigate to the plugins directory of your WordPress installation and run the following command:**

	npx @wordpress/create-block block-waves

## Step 2: Navigate to the Plugin Directory
**Once the plugin is created, change to the plugin directory:**

	cd waves

## Step 3: Start the Development Server
**To start the development server, run:**

	npm start

## Step 4: Activate the Plugin in WordPress
**Go to the WordPress admin panel and navigate to the plugins section. Activate the plugin named "Waves".**

## Step 5: Edit a New Page in wp-admin
**In the WordPress admin panel, create or edit a page.**

## Step 6: Add the New Waves Block
**In the page editor, look for the "Waves" block in the block library and add it to your page.**

## Step 7: Creat a directory in src -> blocks/curvy 
**Move the following files into the curvy directory: block.json, edit.js, editor.scss, index.js, save.js, style.scss, and view.js.**

## Step 8: Implement the side panel
**Add a PanelBody and create a ToggleControl for the "Top Curve" option <br>
• In this step, you will implement a side panel using Gutenberg components.<br>
• Add a <PanelBody> to group related controls.<br>
• Inside the PanelBody, create a <ToggleControl> to allow users to enable or disable the "Top Curve" setting.**

## Step 9: Create a Directory for Components
**Create a components directory inside src/blocks/curvy <br>
• Inside the components directory, create a new file named curve.js <br>
• This file will contain the logic and UI for rendering the curve component.**

