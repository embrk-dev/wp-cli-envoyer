#WP-CLI-Envoyer
This tool allows you to invoke an Envoyer deployment via wp cli

Envoyer is a service that allows zero down time deployments. While it is made
by the creator of Laravel, it works quite well for WordPress.


##Setup
`wp package install brightoak/wp-cli-envoyer`

You must also have an environment variable set for DEPLOY_URL

You can find this URL in your Envoyer project by going to the Deployment Hooks tab


##Usage:
`wp envoyer deploy`

