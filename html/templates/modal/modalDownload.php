<h4>Workflow Name</h4>
<p>
    <input id="workflowName" type="text" />
</p>
    <h4>Id</h4>
<p>
    <input id="workflowID" type="number" min="0" />
</p>
    <h4>Access Level</h4>
<p>
    <select id="AccessLVL">
        <option>PUBLIC</option>
        <option>PRIVATE</option>
    </select>
</p>
<button type="button" class="btn btn-primary" onclick="toJSON()" data-dismiss="modal">Save File</button>
<button type="button" class="btn btn-primary" onclick='toXML()' data-dismiss="modal">Save XML</button>
