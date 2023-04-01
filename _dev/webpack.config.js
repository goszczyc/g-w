const path = require("path");
const webpack = require("webpack");
console.log(path);
module.exports = {
  entry: "./path/to/my/entry/file.js",
  output: {
    path: path.resolve(__dirname, "dist"),
    filename: "my-first-webpack.bundle.js",
    module: {
      rules: [
        {
          test: /\.(s(a|c)ss)$/,
          use: [
            "sass-loader",
            {
              loader: "sass-loader",
              options: {
                implementation: require("sass"),
              },
            },
          ],
        },
      ],
    },
  },
};
