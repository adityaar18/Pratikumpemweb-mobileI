import React, { Component } from 'react';
import { Container, Header, Content, Text, ListItem, Left, Body, Thumbnail, Item, Icon, Input } from 'native-base';
let helperArray=require('./userList.json');
export default class ContentExample extends Component {
  constructor(props){
    super(props);
    this.state = {
      allUsers: helperArray,
      usersFiltered: helperArray,
    };
  }
  searchUser(textToSearch){
    this.setState({
      usersFiltered: this.state.allUsers.filter(i => i.name.toLowerCase().includes(textToSearch.toLowerCase()),
      ),
    });
  }
  render() {
    return (
      <Container>
        <Header searchBar rounded>
          <Item>
            <Icon name='search'/>
            <Input placeholder='Search User' onChangeText={text=>{this.searchUser(text)}}/>
          </Item>
        </Header>
        <Content>
          {this.state.usersFiltered.map((item,index) => (
          <ListItem avatar>
            <Left>
              <Thumbnail source={{uri: item.image}}/>
            </Left>
            <Body>
              <Text>{item.name}</Text>
              <Text note>{item.address}</Text>
            </Body>       
          </ListItem>
          ))}
        </Content>
      </Container> 
    );
  } 
}