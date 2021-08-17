/* eslint-env browser */
/* globals PIEROGI_DIST_PATH */

/** Dynamically set absolute public path from current protocol and host */
if (PIEROGI_DIST_PATH) {
  __webpack_public_path__ = PIEROGI_DIST_PATH; // eslint-disable-line no-undef, camelcase
}
