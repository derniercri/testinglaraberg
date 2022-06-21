<x-forms::field-wrapper
    :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :hint="$getHint()"
    :hint-icon="$getHintIcon()"
    :required="$isRequired()"
    :state-path="$getStatePath()"
>
    <link rel="stylesheet" href="{{asset('vendor/laraberg/css/laraberg.css')}}">

    <div x-data="{ state: $wire.entangle('{{ $getStatePath() }}') }" >
        <!-- Interact with the `state` property in Alpine.js -->
        <textarea name="content" id="content" hidden>{{old('content')}}</textarea>    </div>

    <script src="https://unpkg.com/react@17.0.2/umd/react.production.min.js"></script>
    <script src="https://unpkg.com/react-dom@17.0.2/umd/react-dom.production.min.js"></script>
    <script src="{{ asset('vendor/laraberg/js/laraberg.js') }}"></script>
    <script>

        /**
         *  Laravel file manager
         * reprise du fonctionnement de la V1 de laraberg afin de prendre en compte FileManager
         *  getMediaType => getMediaType gère les formats de fichiers acceptés
         *  onSelect => onSelect gère l'action à effectuer lorsque l'utilisateur sélectionne un fichier
         *  openModal => openModal gère l'action à effectuer lorsque l'utilisateur clique sur le bouton
         *  openLFM => openLFM gère l'action à effectuer lorsque l'utilisateur ouvre la fenêtre de FileManager
         */
        class LaravelFilemanager extends Laraberg.wordpress.element.Component {
            constructor (props) {
                super(props)
                this.state = {
                    media: []
                }
            }

            getMediaType = (path) => {
                const video = ['mp4', 'm4v', 'mov', 'wmv', 'avi', 'mpg', 'ogv', '3gp', '3g2']
                const audio = ['mp3', 'm4a', 'ogg', 'wav']
                const extension = path.split('.').slice(-1).pop()
                if (video.includes(extension)) {
                    return 'video'
                } else if (audio.includes(extension)) {
                    return 'audio'
                } else {
                    return 'image'
                }
            }

            onSelect = (url, path) => {
                this.props.value = null
                const { multiple, onSelect } = this.props
                const media = {
                    url: url,
                    type: this.getMediaType(path)
                }
                if (multiple) { this.state.media.push(media) }
                onSelect(multiple ? this.state.media : media)
            }

            openModal = () => {
                let type = 'file'
                if (this.props.allowedTypes.length === 1 && this.props.allowedTypes[0] === 'image') {
                    type = 'image'
                }
                this.openLFM(type, this.onSelect)
            }

            openLFM = (type, cb) => {
                const routePrefix = '/laravel-filemanager'
                window.open(routePrefix + '?type=' + type, 'FileManager', 'width=900,height=600')
                window.SetUrl = function (items) {
                    if (items[0]) {
                        cb(items[0].url, items[0].name)
                    }
                }
            }

            render () {
                const { render } = this.props
                return render({ open: this.openModal })
            }
        }

        /**
         * désactivation du bouton de l'éditeur Gutenberg
         */

        elementRendered('.components-form-file-upload button', element => element.remove())

        /**
         * ajout de la fonctionnalité de mediaUpload
         * @param selector
         * @param callback
         * @returns {MutationObserver}
         */
        function elementRendered (selector, callback) {
            const renderedElements = []
            const observer = new MutationObserver((mutations) => {
                const elements = document.querySelectorAll(selector)
                elements.forEach(element => {
                    if (!renderedElements.includes(element)) {
                        renderedElements.push(element)
                        callback(element)
                    }
                })
            })
            observer.observe(document.documentElement, { childList: true, subtree: true })
            return observer
        }

        Laraberg.wordpress.hooks.addFilter(
            'editor.MediaUpload',
            'core/edit-post/components/media-upload/replace-media-upload',
            () => LaravelFilemanager
        )


        /**
         * définition d'un mediaUpload vide
         */
        const mediaUpload = ({filesList, onFileChange}) => {}

        const options = {
            height: "500px", // OK
            alignWide: true, //OK
            mediaUpload: mediaUpload, //OK
            supportsLayout: true, //OK
            colors: {
                background: '#f5f5f5',
            },
            fontSizes: [{name: 'small', size: 12}, {name: 'normal', size: 14}, {name: 'large', size: 16}, {
                name: 'huge',
                size: 18
            }], //OK
        }

        Laraberg.init('content', options);


    </script>
</x-forms::field-wrapper>
