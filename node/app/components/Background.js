const React = require('react');

class Background extends React.Component {
  render() {
    return (
      <div className=`background {this.props.type}`>
			</div>
    )}
  };

export default Background;