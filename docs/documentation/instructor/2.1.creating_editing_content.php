<?php require('../common/body_header.inc.php'); ?>

	<a name="2.1"></a><h2>2.1 Creating and Editing Content</h2>

	<p>Once you have selected a course, you can create or edit course content by selecting the <i>Manage</i> tab, then selecting the <i>Content</i> option.</p>

	<p>You should now see a table of all the content in your current course. If you have no content, this list will be empty. If you already have content in your course, you can select an item and click the <code>Edit</code> button to begin editing. If you want to create new content, select the <i>Create Content</i> link along the top.</p>

	<p>Whether editing or creating new content, the interface is the same for both actions.</p>
	
	<a name="2.1.1"></a><h3>2.1.1 Content</h3>
	<p>Content can be created in either 'plain text' or 'HTML' modes. Plain text mode is useful for quickly writing up text content. Conversely, HTML mode allows for extra features like text formatting and layout, but is a little more complex to use.</p>

	<dl>
		<dt>Formatting: Plain Text</dt>
		<dd>If using plain text mode, just type the content in the Body window. Note that any extra spaces between characters will be removed (i.e. two or more spaces), but any blank lines will be saved with the text.</dd>

		<dt>Formatting: HTML</dt>
		<dd>If using HTML mode, you can type HTML tags in the Body window along with your text. If you are unfamiliar with HTML, you can use the visual editor by clicking the <code>Switch to visual editor</code> button.</dd>

		<dt>File Manager</dt>
		<dd>
			<p>The File Manager is a tool that allows you to upload files from your local system to be used in your course.</p>
			
			<p><code>Create Folder</code> creates a folder on the ATutor system so you can better organize your uploaded files. You can create folders and/or move files into that folder at any time you like.</p>

			<p><code>Browse...</code> opens a local file browser window so you can select the file you want to upload.</p>

			<p><code>Upload</code> will upload the specified file to the ATutor system. You can specify a file by either typing the path and filename in the <kbd>text field</kbd> or by using the <code>Browse</code> button.</p>

			<p><em>Create a New File</em> link will display a new interface where you can quickly create a new text or HTML file. If using Text mode, any blank lines will be saved with the file. If using HTML, you should be familiar with using HTML tags as no visual editor is provided. Clicking <code>Save</code> will save a new file with your specified information (filename and content) into the ATutor system and bring you back to the File Manager. <code>Cancel</code> will discard the file and bring you back to the File Manager browser.</p>

			<p><code>Rename</code> button renames a single, selected file.</p>

			<p><code>Delete</code> and <code>Move</code> buttons deletes or moves the selected files and folders (and its contents) from the ATutor system. You can select multiple files and folders for deletion or moving.</p>

			<p><code>Insert</code> appears under the <em>Action</em> column for files that can be inserted into the content. Clicking the <code>Insert</code> button will add appropriate HTML code into the body of the content. If you are formatting in <em>plain text</em> you will need to switch to <em>HTML</em> formatting in order for it to display properly.</p>
		</dd>

		<dt>Terms</dt>
		<dd><p>In either plain text, or HTML formatting modes, you can insert <em>terms</em> which are used to tell the ATutor system the words you want to define in the glossary.</p>
		
		<p>Clicking the <em>Add Term</em> link will add <kbd>[?][/?]</kbd> into your content, and any text you put after <kbd>[?]</kbd> and before <kbd>[/?]</kbd> will specify the term you want to define. Alternatively, you can manually type <kbd>[?][/?]</kbd> into your text without having to click the <em>Add Term</em>.</p>

		<p>Once you have specified the terms you would like to define, you can go to the <em>Glossary Terms</em> tab to write the definitions. Once done, the terms and their definitions will appear in the glossary and in the content.</p>

		<dt>Code</dt>
		<dd><p>In either plain text, or HTML formatting modes, you can insert <em>code</em> which is useful for differentiating blocks of text (like math equations, program code, or quotations)from the rest of the text content.</p>
		
		<p>Clicking the <em>Add Code</em> link will add <kbd>[code][/code]</kbd> into your content, and whatever text you put after <kbd>[code]</kbd> and before <kbd>[/code]</kbd> will specify the text you want to differentiate. Alternatively, you can manually type <kbd>[code][/code]</kbd> into your text without having to click the <em>Add Code</em> link.</p>
		</dd>

		<dt>Colours</dt>
		<dd>Like <em>code</em> and <em>terms</em> you can add colour to your text content in the same way. You can either click the appropriate colour icon to insert colour tags into the content. Valid colour options are blue, red, green, orange, purple, and gray. You can also type the colour codes manually by using the following tags: <kbd>[blue][/blue]</kbd>, <kbd>[red][/red]</kbd>, <kbd>[green][/green]</kbd>, <kbd>[orange][/orange]</kbd>, <kbd>[purple][/purple]</kbd>, and <kbd>[gray][/gray]</kbd></dd>.

		<dt>Upload from File</dt>
		<dd>Instead of typing your content, you can upload it from a text or HTML file on your local file system. Once uploaded, the content of that file will be displayed in the <em>Body</em> window. Keep in mind that uploading in this manner will replace any content in the <em>Body</em> window.</dd>

		<dt>Save and Close</dt>
		<dd>At any point of editing or creating content, you can chose to <kbd>Save</kbd> your content, or <kbd>Cancel</kbd> your changes. 
		</dd>
	</dl>

	<a name="2.1.2"></a><h3>2.1.2 Properties</h3>
	<p>In the properties tab, you can specify a Release Date, keywords for easier searching, and specify related topics.</p>

	<dl>
		<dt>Release Date</dt>
		<dd>The release date is the date in which the content will be visible to the course. You can schedule a release in the future by specifying a later date. Also, if you specify a release date that has past, it will be released immediately.</dd>

		<dt>Keywords</dt>
		<dd>Words in the Keywords are given greater emphasis during searching. Therefore they will be placed higher in a list of search results than if there were no keywords. Keywords are also used to as Learning Object Metadata.</dd>

		<dt>Related Topics</dt>
		<dd><p>For each piece of content you have in the course, you can specify what other content in the course is related. Moving content up the related topics list places that content closer to the top of the Content Navigation window. The opposite is true if you move content down the Related Topics list.</p>
		<p>You can also make content a child of another piece of content. In this case, the child content will appear as sub-content on the Content Navigation window. All sub-content children and their parent will appear in the Related Topics window.</p>
		</dd>
	</dl>

	<a name="2.1.3"></a><h3>2.1.3 Glossary Terms</h3>
	<p>If you specified Terms in the Content tab, you have the opportunity to define those terms here. For each term specified in the <em>Content</em> tab, there is a Definition window where you provide your explanation. If there are no glossary terms listed, you can add glossary terms by going to the Content tab and adding Term tags.</p>
	
	<p>In order to set a Related Term, you must have at least two defined terms in the glossary.</p>
		
	<a name="2.1.4"></a><h3>2.1.4 Preview</h3>
	<p>Under the Preview tab, you can see how your content will appear to a user, including Terms, Code, and Colors you added to the content.</p>
		
	<a name="2.1.5"></a><h3>2.1.5 Accessibility</h3>
	<p></p>

<?php require('../common/body_footer.inc.php'); ?>