/*
 *
 * Wijmo Library 3.20131.7
 * http://wijmo.com/
 *
 * Copyright(c) GrapeCity, Inc.  All rights reserved.
 * 
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * licensing@wijmo.com
 * http://wijmo.com/widgets/license/
 *
 */
var __extends = this.__extends || function (d, b) {
    function __() { this.constructor = d; }
    __.prototype = b.prototype;
    d.prototype = new __();
};
var wijmo;
(function (wijmo) {
    /// <reference path="../Base/jquery.wijmo.widget.ts" />
    /*globals jQuery*/
    /*
    * Depends:
    *  jquery.mobile.js
    *
    */
    (function (listview) {
        "use strict";
        var $ = jQuery, widgetName = "wijlistview";
        var wijlistview = (function (_super) {
            __extends(wijlistview, _super);
            function wijlistview() {
                _super.apply(this, arguments);

            }
            wijlistview.prototype._baseWidget = function () {
                return $.mobile.listview;
            };
            return wijlistview;
        })(wijmo.wijmoWidget);
        listview.wijlistview = wijlistview;        
        // empty so far
        if($.mobile) {
            wijlistview.prototype.options = $.extend({
            }, $.mobile.listview.prototype.options, wijmo.wijmoWidget.prototype.options, {
                initSelector: ":jqmData(role='wijlistview')"
            });
            $.wijmo.registerWidget(widgetName, $.mobile.listview, wijlistview.prototype);
        }
    })(wijmo.listview || (wijmo.listview = {}));
    var listview = wijmo.listview;
})(wijmo || (wijmo = {}));
