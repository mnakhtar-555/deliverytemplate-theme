(function(blocks, editor, i18n, element) {
    var el = element.createElement;

    blocks.registerBlockType('custom-intro-block/intro-section', {
        title: i18n.__('Custom Intro Section', 'custom-intro-block'),
        icon: 'welcome-widgets-menus',
        category: 'custom-intro-block',
        edit: function(props) {
            return el('p', { className: props.className }, i18n.__('Custom Intro Section Block', 'custom-intro-block'));
        },
        save: function() {
            return el('p', {}, i18n.__('Custom Intro Section Content', 'custom-intro-block'));
        },
    });
})(
    window.wp.blocks,
    window.wp.editor,
    window.wp.i18n,
    window.wp.element
);
