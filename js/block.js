const { __ } = wp.i18n;
const {
	registerBlockType,
	BlockControls,
	AlignmentToolbar
} = wp.blocks;

registerBlockType( 'mdlr/toolbar-control-jsx-example', {
	title: __( 'Toolbar Control Example with JSX' ),
	icon: 'admin-tools',
	category: 'common',
	attributes: {
		alignment: {
			type: 'string',
		},
	},
	edit( { attributes, className, focus, setAttributes } ) {
		const { alignment } = attributes;

		function onChangeAlignment( updatedAlignment ) {
			setAttributes( { alignment: updatedAlignment } );
		}

		return (
			<div className={ className }>
				{
					!! focus && (
						<BlockControls>
							<AlignmentToolbar
								value={ alignment }
								onChange={ onChangeAlignment }
							/>
						</BlockControls>
					)
				}
				<p style={ {textAlign:  alignment } }>Toolbar control block example built with JSX.</p>
			</div>
		);
	},
	save( { attributes, className } ) {
		const { alignment } = attributes;

		return (
			<div className={ className }>
				<p style={ {textAlign:  alignment } }>Toolbar control block example built with JSX.</p>
			</div>
		);
	},
} );
