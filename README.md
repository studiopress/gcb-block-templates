

# Genesis Custom Blocks - Block Templates
## Description
This repo is a community directory for custom block templates built with the WordPress plugin Genesis Custom Blocks.
## Using these templates
Download or clone the repo and extract the files for the block you are interested in. With Genesis Custom Blocks installed, you will be able to import the `.json` block file, then add the template files to your theme or plugin. For more information on working with Genesis Custom Blocks, please refer to the [plugin documentation.](https://developer.wpengine.com/genesis-custom-blocks/)
## Contributing
Clone this repo to your local environment, open a new branch, and add your code following the file and folder conventions below.

When adding a new block, you should include 3 types of files:

 1. The block template files. These are usually a combination of PHP, JS, and CSS files. For working with template files in Genesis Custom Blocks, [please refer to the plugin documentation](https://developer.wpengine.com/genesis-custom-blocks/).
 2. A `.json` file which is the block export. [Exporting blocks documentation.](https://developer.wpengine.com/genesis-custom-blocks/get-started/export-custom-blocks-to-include-in-your-theme/)
 3. A `readme.md` file that includes a description of the block, how it works, dependancies (including if it uses Pro features), and links to relevant content or live demos.

These 3 types of files should sit within a specific structure. Within the parent `blocks` folder, create a new folder that matches the `slug`of your custom block. Place your template and supporting files within this folder.

The following is an example of the folder and file structure.

    blocks/  
      block-name-1/  
         block.css  
         block.php  
         block.json  
         readme.md  
      block-name-2/  
         block.css  
         block.php  
         block.json  
         readme.md

Once your code is ready, submit a pull request to the repo where someone from the team will review. We welcome all submissions from the community alongside the efforts of the Genesis team.