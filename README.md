## Gutenberg Block Boilerplate

It functions similarly to a boilerplate for creating unique **Gutenberg Block**. The package **@wordpress/scripts** was used to create it. There is a significant difference between it and the **@wordpress/create-block**, however they are almost identical.

## How to Start Your Development

**Simply clone the Repo. in your WordPress plugin directory. Now install the plugin.**

It generates a new plugin with a custom block category and a basic empty custom Gutenberg block. The **Block Development Starter & Hello Block** dummy block is located under the **BOILERPLATE** category.

It's now time to execute the following command in this boilerplate folder (you may rename the folder according to your needs) to install npm.

```
$ npm install
```

node_modules will then load, allowing you to begin creating your own block. Use the following command to begin modifying and viewing the effect.

```
$ npm start
```

You must construct the entire project in order to produce it. In order to create the project, execute the subsequent command:

```
$ npm run build
```

## New Block Registration Process

To incorporate an additional block into your plugin, you need to take the following actions:

-   **Step-1:** In the **blocks** directory, make a new folder. It is located at **src/blocks**.
    Assume I would like to make a **test** block. Thus, my folder will be named **test** and located in **src/blocks/test**.

-   **Step 2:** Maintain your block folder's contents with all required blocks. 


**NOTE**: \*Using your own prefix is strongly advised. **gutenberg-block-boilerplate** and **GUTENBERG-BLOCK-BOILERPLATE** were the prefixes used in the case of boilerplate.

## Better Practice

For new block registration, it is preferable to execute **npm run build** first. Then, just run **npm start** to update editing.

### Acknowledgements

-   [Gutenberg Developer Handbook](https://developer.wordpress.org/block-editor/)
-   [Block Plugin Checker](https://wordpress.org/plugins/developers/block-plugin-validator/)
-   [WordPress Components](https://wordpress.github.io/gutenberg/)

### Authors

 Touhidul Sadeek - [@Touhid](https://www.github.com/touhidbd)


## Feedback

If you have any feedback, please reach out to us at touhidul.sadeek@gmail.com

