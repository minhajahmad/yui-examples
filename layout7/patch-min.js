(function(){var B=YAHOO.util.Dom,A=YAHOO.util.Event,C=YAHOO.lang;YAHOO.widget.Layout.prototype._setupElements=function(){this._doc=this.getElementsByClassName("yui-layout-doc")[0];if(!this._doc){this._doc=document.createElement("div");this.get("element").appendChild(this._doc)}this._createUnits();this._setBodySize();B.addClass(this._doc,"yui-layout-doc")};YAHOO.widget.Layout.prototype.destroy=function(){var F=this.get("parent");if(F){F.removeListener("resize",this.resize,this,true)}A.removeListener(window,"resize",this.resize,this,true);this.unsubscribeAll();this._units={};this._units.center=this._center;this._units.top=this._top;this._units.bottom=this._bottom;this._units.left=this._left;this._units.right=this._right;for(var D in this._units){if(C.hasOwnProperty(this._units,D)){if(this._units[D]){this._units[D].destroy(true)}}}A.purgeElement(this.get("element"));this.get("parentNode").removeChild(this.get("element"));delete YAHOO.widget.Layout._instances[this.get("id")];for(var E in this){if(C.hasOwnProperty(this,E)){this[E]=null;delete this[E]}}if(F){F.resize()}};YAHOO.widget.LayoutUnit.prototype.destroy=function(F){if(this._resize){this._resize.destroy()}var E=this.get("parent");this.setStyle("display","none");if(this._clip){this._clip.parentNode.removeChild(this._clip);this._clip=null}if(!F){E.removeUnit(this)}A.purgeElement(this.get("element"));this.get("parentNode").removeChild(this.get("element"));delete YAHOO.widget.LayoutUnit._instances[this.get("id")];for(var D in this){if(C.hasOwnProperty(this,D)){this[D]=null;delete this[D]}}return E}})();