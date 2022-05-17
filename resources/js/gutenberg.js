import "/vendor/laraberg/css/laraberg.css";
import "/vendor/laraberg/js/laraberg.js";

Laraberg.init('content',
    {
        sidebar: true,
        laravelFilemanager: true,

    });

let title = 'my-custom-blocks'
let slug = 'my-custom-blocks'
Laraberg.registerCategory(title, slug)



//first test custom block
const myBlock =  {
    title: 'My First Block!',
    icon: 'universal-access-alt',
    category: 'my-custom-blocks',

    edit() {
        return "<h1>Hello editor.</h1>"
    },

    save() {
        return "<h1>Hello saved content.</h1>"
    }
}

Laraberg.registerBlock('testing-laraberg/myblock', myBlock)
